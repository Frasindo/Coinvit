<?php

namespace Coinvit\Http\Controllers\PublicAPI;
use Helpers\ArdorHelper;
use Helpers\StellarTrade;
use Helpers\ExchangeHelper;
use Helpers\ArdorTrade;
use Illuminate\Http\Request;
use Coinvit\User;
use Coinvit\TabelKegiatan;
use Coinvit\Http\Controllers\Controller;
use Coinvit\Token;
use Coinvit\Blockchain;
use Auth;
use Coinvit\DirectUser;
use \Illuminate\Contracts\Auth\Authenticatable;
class Api extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"Welcome to Public API Coinvit 0.0.1"]);
    }
    public function login(Request $req)
    {
        $this->validate($req,[
          "type"=>"required",
          "dex"=>"required",
          "email"=>"required_if:type,==,np|exists:users,email",
          "password"=>"required_if:type,==,np",
          "pk"=>"required_if:type,==,bw",
          "sk"=>"required_if:type,==,sk"
        ]);
        if ($req->input("type") == "bw") {
          $cek = new ArdorTrade($req->input("pk"));
        }elseif ($req->input("type") == "sk") {
          $cek = new ArdorTrade(null,$req->input("sk"));
        }else {
          $credentials = $req->only('email', 'password');
          if (Auth::attempt($credentials)) {
            return response()->json(["status"=>1,"msg"=>"Login Success","data"=>auth()->user()]);
          }else {
            return response()->json(["status"=>0,"message"=>"Invalid Credentials"],422);
          }
        }
        $rs = $cek->isvalidacc();
        if ($req->input("dex") == "ardor") {
          $path = url("exchange/ardor");
        }
        if ($rs["status"] == 1) {
          $cred = ["pk"=>$rs["pk"]];
          if (Auth::guard('trade_direct')->attempt($cred)) {
            $update = \Coinvit\DirectUser::where(["pk"=>$rs["pk"]])->update(["last_login"=>date("Y-m-d")]);
            if (!$update) {
              return response()->json(["status"=>0,"message"=>"Technical Error Please Contact Adminitrator"],500);
            }
            return response()->json(["status"=>1,"message"=>"Account Validated","path"=>$path]);
          }else {
            $create = \Coinvit\DirectUser::create(["pk"=>$rs["pk"],"last_login"=>date("Y-m-d")]);
            if ($create) {
              if (Auth::guard('trade_direct')->attempt(["pk"=>$rs["pk"]])) {
                return response()->json(["status"=>1,"message"=>"Account Validated","path"=>$path]);
              }else {
                return response()->json(["status"=>0,"message"=>"Technical Error Please Contact Adminitrator"],500);
              }
            }else {
              return response()->json(["status"=>0,"message"=>"Technical Error Please Contact Adminitrator"],500);
            }

          }
        }else {
          return response()->json(["status"=>0,"message"=>$rs["message"],"debug"=>$cek->isvalidacc()],422);
        }
    }
    public function validation()
    {
      if (auth()->check()) {
        return response()->json(["status"=>1,"msg"=>"Credential Valid [Normal Account]","data"=>auth()->user()]);
      }else {
        if (auth::guard("trade_direct")->check()) {
          return response()->json(["status"=>1,"msg"=>"Credential Valid [Direct Trade]","data"=>auth::guard("trade_direct")->user()]);
        }else {
          return response()->json(["status"=>0,"msg"=>"Credential Expired"]);
        }
      }
    }
    public function listtoken($id='ardor',$add="")
    {
      if ($id == 'ardor') {
        $get = new ArdorTrade();
        $list = $get->Token();
        if ($add == "add") {
          $id = Blockchain::where(["name"=>"Ardor"])->first()->id_blockchain;
          $addlist = [];
          foreach ($list->assets as $key => $value) {
            $addlist[] = ["id_token"=>$value->asset,"name"=>$value->name,"issuer"=>$value->accountRS,"decimal"=>$value->decimals,"desc"=>$value->description,"id_blockchain"=>$id,"created_at"=>Date("Y-m-d H:i:s")];
          }
          if (Token::insert($addlist)) {
            $get->Statistic(null,date("Y-m-d"));
            return response()->json(["status"=>1,"msg"=>"Data Saved"]);
          }else {
            return response()->json(["status"=>0,"msg"=>"Data not Saved"]);
          }
        }elseif ($add == "update") {
          $oldtoken = Token::where(["id_blockchain"=>1])->get();
          foreach ($oldtoken as $key => $value) {
            foreach ($list->assets as $k => $v) {
              if ($value->id_token == $v->asset) {
                $compose = ["name"=>$v->name,"issuer"=>$v->accountRS,"decimal"=>$v->decimals,"desc"=>$v->description];
                if (!Token::where(["id_token"=>$v->asset])->update($compose)) {
                  return response()->json(["status"=>0,"msg"=>"Updated Error on Asset := {$v->asset} with Name {{$v->name}}"]);
                }
              }
            }
          }
          $get->Statistic(null,date("Y-m-d"));
          return response()->json(["status"=>1,"msg"=>"Data Updated"]);
        }
        $getData = Token::where(["id_blockchain"=>1])->get();
        return response()->json($getData);
      }elseif ($id == 'stellar') {
        $set = new StellarTrade();
        $s = $set->Tokenlist(200,30);
        return $s;
      }
    }
    public function orderbook($asset='',$address='')
    {
      if ($asset != '') {
        if ($address != '') {
          $obj = new ArdorTrade($address);
          $obj->setAsset($asset);
          $ask = $obj->MyAskHistory();
          $bid = $obj->MyBidHistory();
          if ($ask == false) {
            $ask = [];
          }
          if ($bid == false) {
            $bid = [];
          }
          return response()->json(["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]]);
        }else {
          $obj = new ArdorTrade(null,null);
          $obj->setAsset($asset);
          $ask = $obj->AskHistory();
          $bid = $obj->BidHistory();
          if ($ask == false) {
            $ask = [];
          }
          if ($bid == false) {
            $bid = [];
          }
          return response()->json(["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]]);
        }
      }else {
        return response()->json(["status"=>0,"msg"=>"Fill Asset"]);
      }

    }
    public function tokentable(Request $req,$block="")
    {
      // datatablesConvert();
      $reqget = $req->all();
      if ($block == "" || $block == "favorite") {
        $total = \Coinvit\TokenFavorite::count();
        $ardor = \Coinvit\TokenFavorite::offset($reqget["start"])->limit($reqget["length"])->get();
        $data = [];
        foreach ($ardor as $key => $value) {
          $value = $value->token;
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$value->id_token])->orderBy("created_at","desc")->get();
          $now = $getStat[0];
          $vol = $now->volume;
          if (!isset($getStat[1]->price)) {
            $change = '<p class="text-default">0</p>';
          }else {
            $change = ($now->price - $getStat[1]->price);
            if ($change > 0) {
              $change = '<p class="text-green">'.number_format($change,2).' <i class="fa fa-caret-up"></i></p>';
            }elseif($change < 0) {
              $change = '<p class="text-red">'.number_format($change,2).' <i class="fa fa-caret-down"></i></p>';
            }
          }
          if ($value->icon != null) {
            $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon">';
          }else {
            $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon tokenachor">';
          }
          $data[] = ["no"=>'<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star text-yellow"></i></span>',"name_market"=>$value->name.' - IGNIS',"name"=>$icon.$value->name,"volume"=>number_format($vol,4),"change"=>$change,"last_price"=>number_format($now->price,6),"h"=>number_format($now->price_high,4),"l"=>number_format($now->price_low,4),"spread"=>number_format($now->spread,4),"created_at"=>date("Y/m/d",strtotime($value->created_at))];
        }
        $vol = null;
        usort($data,'sort_vol');
        return datatablesConvert($data,"no,name_market,name,volume,change,last_price,h,l,spread,created_at",$total);
      }elseif ($block == "ardor") {
        $total = \Coinvit\Token::where(["id_blockchain"=>1])->count();
        $ardor = \Coinvit\Token::where(["id_blockchain"=>1])->offset($reqget["start"])->limit($reqget["length"])->where("name","like",'%'.$reqget["search"]["value"].'%')->get();
        $data = [];
        foreach ($ardor as $key => $value) {
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$value->id_token])->orderBy("created_at","desc")->get();
          $now = $getStat[0];
          $vol = $now->volume;
          if (!isset($getStat[1]->price)) {
            $change = '<p class="text-default">0</p>';
          }else {
            $change = ($now->price - $getStat[1]->price);
            if ($change > 0) {
              $change = '<p class="text-green">'.number_format($change,2).' <i class="fa fa-caret-up"></i></p>';
            }elseif($change < 0) {
              $change = '<p class="text-red">'.number_format($change,2).' <i class="fa fa-caret-down"></i></p>';
            }
          }
          if ($value->icon != null) {
            $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon">';
          }else {
            $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon tokenachor">';
          }
          $cekFav = \Coinvit\TokenFavorite::where(["id_token"=>$value->id_token])->count();
          $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star-o text-yellow"></i></span>';
          if ($cekFav > 0) {
            $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star text-yellow"></i></span>';
          }
          $data[] = ["no"=>$no,"name_market"=>$value->name.' - IGNIS',"name"=>$icon.$value->name,"volume"=>number_format($vol,4),"change"=>$change,"last_price"=>number_format($now->price,6),"h"=>number_format($now->price_high,4),"l"=>number_format($now->price_low,4),"spread"=>number_format($now->spread,4),"created_at"=>date("Y/m/d",strtotime($value->created_at))];
        }
        $vol = null;
        usort($data,'sort_vol');
        return datatablesConvert($data,"no,name_market,name,volume,change,last_price,h,l,spread,created_at",$total);
      }elseif ($block == "stellar") {
        $total = \Coinvit\Token::where(["id_blockchain"=>2])->count();
        $stellar = \Coinvit\Token::where(["id_blockchain"=>2])->offset($reqget["start"])->limit($reqget["length"])->where("name","like",'%'.$reqget["search"]["value"].'%')->get();
        $data = [];
        foreach ($stellar as $key => $value) {
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$value->id_token])->orderBy("created_at","desc")->get();
          if (count($getStat) > 0) {
            $now = $getStat[0];
            $vol = $now->volume;
            if (!isset($getStat[1]->price)) {
              $change = '<p class="text-default">0</p>';
            }else {
              $change = ($now->price - $getStat[1]->price);
              if ($change > 0) {
                $change = '<p class="text-green">'.number_format($change,2).' <i class="fa fa-caret-up"></i></p>';
              }elseif($change < 0) {
                $change = '<p class="text-red">'.number_format($change,2).' <i class="fa fa-caret-down"></i></p>';
              }
            }
            if ($value->icon != null) {
              $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon">';
            }else {
              $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon tokenachor">';
            }
            $cekFav = \Coinvit\TokenFavorite::where(["id_token"=>$value->id_token])->count();
            $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star-o text-yellow"></i></span>';
            if ($cekFav > 0) {
              $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star text-yellow"></i></span>';
            }
            $data[] = ["no"=>$no,"name_market"=>$value->name.' - XLM',"name"=>$icon.$value->name,"volume"=>number_format($vol,4),"change"=>$change,"last_price"=>number_format($now->price,6),"h"=>number_format($now->price_high,4),"l"=>number_format($now->price_low,4),"spread"=>number_format($now->spread,4),"created_at"=>date("Y/m/d",strtotime($value->created_at))];
          }else {
            if ($value->icon != null) {
              $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon">';
            }else {
              $icon = '<img src="'.$value->icon.'" style="width: 20px; height: 20px;margin-right: 5px;" onerror="errorImg()" class="logo-icon tokenachor">';
            }
            $cekFav = \Coinvit\TokenFavorite::where(["id_token"=>$value->id_token])->count();
            $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star-o text-yellow"></i></span>';
            if ($cekFav > 0) {
              $no = '<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star text-yellow"></i></span>';
            }
            $data[] = ["no"=>$no,"name_market"=>$value->name.' - XLM',"name"=>$icon.$value->name,"volume"=>number_format(0,4),"change"=>0,"last_price"=>number_format(0,6),"h"=>number_format(0,4),"l"=>number_format(0,4),"spread"=>number_format(0,4),"created_at"=>date("Y/m/d",strtotime($value->created_at))];
          }
        }
        $vol = null;
        usort($data,'sort_vol');
        $limit = 19;
        foreach ($data as $key => &$value) {
            if ($value["name"] == "FRAS") {
              $temp = $data[0];
              $data[0] = $data[$key];
              $data[$key] = $temp;
            }
        }
        return datatablesConvert($data,"no,name_market,name,volume,change,last_price,h,l,spread,created_at",$total);
      }
    }
    public function topgain($block='')
    {
      if ($block == '' || $block == "favorite") {
        $ardor = \Coinvit\TokenFavorite::all();
        $data = [];
        foreach ($ardor as $key => $value) {
          $value = $value->token;
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$value->id_token])->orderBy("created_at","desc")->get();
          $now = $getStat[0];
          $vol = $now->volume;
          $lp = $now->price;
          $c = 0;
          if (!isset($getStat[1]->price)) {
            $change = '<p class="text-default">0</p>';
          }else {
            $change = ($now->price - $getStat[1]->price);
            $c = $change;
            if ($change > 0) {
              $change = '<p class="text-green">'.number_format($change,2).' <i class="fa fa-caret-up"></i></p>';
            }elseif($change < 0) {
              $change = '<p class="text-red">'.number_format($change,2).' <i class="fa fa-caret-down"></i></p>';
            }
          }

          $icon = url("assets/logo/blank.png");
          if ($value->icon != null) {
            $icon = $value->icon;
          }
          $data[] = ["id_token"=>$value->id_token,"name"=>$value->name,"change"=>$change,"c_unformat"=>$c,"icon"=>$icon,"price"=>$lp,"volume"=>$vol];

        }
        usort($data,"sort_change");
        $top = [];
        $limit = 4;
        foreach ($data as $key => $value) {
          if ($value["c_unformat"] > 0 || $value["name"] == "FRAS") {
            $top[] = $value;
          }
          if (count($top) == $limit) {
            $fras = false;
            foreach ($top as $k => $v) {
              if ($v["name"] == "FRAS") {
                $fras = true;
                break;
              }
            }
            if ($fras) {
              break;
            }else {
              unset($top[(count($top) - 1)]);
            }
          }
        }
        $data = $top;
        foreach ($data as $y => &$e) {
          $check = \Coinvit\Token::where(["id_token"=>$e["id_token"]])->first();
          if (strtoupper($check->blockchain->name) == "ARDOR") {
            $priceUSD = convertCrypto("IGNIS","USD");
          }elseif (strtoupper($check->blockchain->name) == "STELLAR") {
            $priceUSD = convertCrypto("XLM","USD");
          }
          $e["price_usd"] = number_format($priceUSD * $e["price"],6);
        }
        return $data;
      }elseif ($block == "ardor") {
        $ardor = \Coinvit\Token::where(["id_blockchain"=>1])->get();
        $data = [];
        foreach ($ardor as $key => $value) {
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$value->id_token])->orderBy("created_at","desc")->get();
          $now = $getStat[0];
          $vol = $now->volume;
          $lp = $now->price;
          $c = 0;
          if (!isset($getStat[1]->price)) {
            $change = '<p class="text-default">0</p>';
          }else {
            $change = ($now->price - $getStat[1]->price);
            $c = $change;
            if ($change > 0) {
              $change = '<p class="text-green">'.number_format($change,2).' <i class="fa fa-caret-up"></i></p>';
            }elseif($change < 0) {
              $change = '<p class="text-red">'.number_format($change,2).' <i class="fa fa-caret-down"></i></p>';
            }
          }
          $icon = url("assets/logo/blank.png");
          if ($value->icon != null) {
            $icon = $value->icon;
          }
          $data[] = ["id_token"=>$value->id_token,"name"=>$value->name,"change"=>$change,"c_unformat"=>$c,"icon"=>$icon,"price"=>$lp,"volume"=>$vol];
        }
        usort($data,"sort_change");
        $top = [];
        $limit = 4;
        foreach ($data as $key => $value) {
          if ($value["c_unformat"] > 0 || $value["name"] == "FRAS") {
            $top[] = $value;
          }
          if (count($top) == $limit) {
            $fras = false;
            foreach ($top as $k => $v) {
              if ($v["name"] == "FRAS") {
                $fras = true;
                break;
              }
            }
            if ($fras) {
              break;
            }else {
              unset($top[(count($top) - 1)]);
            }
          }
        }
        $data = $top;
        foreach ($data as $y => &$e) {
          $check = \Coinvit\Token::where(["id_token"=>$e["id_token"]])->first();
          if (strtoupper($check->blockchain->name) == "ARDOR") {
            $priceUSD = convertCrypto("IGNIS","USD");
          }elseif (strtoupper($check->blockchain->name) == "STELLAR") {
            $priceUSD = convertCrypto("XLM","USD");
          }
          $e["price_usd"] = number_format($priceUSD * $e["price"],6);
        }
        return $data;
      }

    }
}
