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
            $addlist[] = ["id_token"=>$value->asset,"name"=>$value->name,"issuer"=>$value->accountRS,"decimal"=>$value->decimals,"desc"=>$value->description,"id_blockchain"=>$id];
          }
          if (Token::insert($addlist)) {
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
          return ["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]];
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
          return ["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]];
        }
      }else {
        return response()->json(["status"=>0,"msg"=>"Fill Asset"]);
      }

    }
}
