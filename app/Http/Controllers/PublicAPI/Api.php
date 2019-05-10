<?php

namespace Coinvit\Http\Controllers\PublicAPI;
use Helpers\ArdorHelper;
use Helpers\ArdorTrade;
use Illuminate\Http\Request;
use Coinvit\User;
use Coinvit\TabelKegiatan;
use Coinvit\Http\Controllers\Controller;
use Coinvit\Token;
use Coinvit\Blockchain;
use Auth;
class Api extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"Welcome to Public API Coinvit 0.0.1"]);
    }
    public function login(Request $req)
    {
        $this->validate($req,[
          "email"=>"required|exists:users,email",
          "password"=>"required",
        ]);
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
          return response()->json(["status"=>1,"msg"=>"Login Success","data"=>auth()->user()]);
        }else {
          return response()->json(["status"=>0,"msg"=>"Invalid Credentials"]);
        }
    }
    public function validation()
    {
      if (auth()->check()) {
        return response()->json(["status"=>1,"msg"=>"Credential Valid","data"=>auth()->user()]);
      }else {
        return response()->json(["status"=>0,"msg"=>"Credential Expired"]);
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
          $oldtoken = Token::all();
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
        $getData = Token::all();
        return response()->json($getData);
      }elseif ($id == 'stellar') {

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
    public function tokentable($block="")
    {
      // datatablesConvert();
      if ($block == "") {
        return response()->json(["data"=>[]]);
      }elseif ($block == "ardor") {
        $ardor = \Coinvit\Token::all();
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
              $change = '<p class="text-green">'.number_format($change).' <i class="fa fa-caret-up"></i></p>';
            }elseif($change < 0) {
              $change = '<p class="text-red">'.number_format($change).' <i class="fa fa-caret-down"></i></p>';
            }
          }

          $data[] = ["no"=>'<span class="fav" data-id="'.$value->id_token.'"><i class="fa fa-star-o text-yellow"></i></span>',"name_market"=>$value->name.' - IGNIS',"name"=>$value->name,"volume"=>number_format($vol,4),"change"=>$change,"last_price"=>number_format($now->price,6),"h"=>number_format($now->price_high,4),"l"=>number_format($now->price_low,4),"spread"=>number_format($now->spread,4),"created_at"=>date("Y/m/d",strtotime($value->created_at))];
        }
        $vol = null;
        usort($data,'sort_vol');
        return datatablesConvert($data,"no,name_market,name,volume,change,last_price,h,l,spread,created_at");
      }
    }
    public function topgain($block='ardor')
    {
      $ardor = \Coinvit\Token::all();
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
            $change = '<p class="text-green">'.number_format($change).' <i class="fa fa-caret-up"></i></p>';
          }elseif($change < 0) {
            $change = '<p class="text-red">'.number_format($change).' <i class="fa fa-caret-down"></i></p>';
          }
        }

        $data[] = ["name"=>$value->name,"change"=>$change,"icon"=>$value->icon,"price"=>""];
      }
    }
}
