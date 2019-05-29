<?php

namespace Coinvit\Http\Controllers\AuthAPI;
use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;
use Helpers\ArdorTrade;
use Auth;
class ApiArdor extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"You Logged In"]);
    }
    public function cancelorder(Request $req,$asset)
    {
      $type = $req->input("type");
      $id = $req->input("id");
      $pk = Auth::guard("trade_direct")->user()->pk;
      $send = new ArdorTrade($pk,session()->get("sk"));
      $send->setAsset($asset);
      if ($type == "bid") {
        $s = $send->cancelBid($id);
      }elseif ($type == "ask") {
        $s = $send->cancelAsk($id);
      }else {
        return response()->json(["status"=>1,"message"=>"Cannot Submit Transaction"],500);
      }
      if ($s["status"] == 1) {
        return response()->json(["status"=>1]);
      }else {
        return response()->json(["status"=>0,"message"=>$s["data"]->errorDescription],500);
      }
    }
    public function trade(Request $req,$asset)
    {
      $pk = Auth::guard("trade_direct")->user()->pk;
      $send = new ArdorTrade($pk,session()->get("sk"));
      $send->setAsset($asset);
      if ($req->input("type") == "bid") {
        $bid = $send->bid($req->input("total"),$req->input("price"));
        if ($bid["status"] == 1) {
          return response()->json(["status"=>1,"data"=>$bid["data"]]);
        }else {
          return response()->json(["status"=>0,"message"=>$bid["data"]->errorDescription,"debug"=>$bid],500);
        }
      }elseif ($req->input("type") == "ask") {
        $ask = $send->ask($req->input("total"),$req->input("price"));
        if ($ask["status"] == 1) {
          return response()->json(["status"=>1,"data"=>$ask["data"]]);
        }else {
          return response()->json(["status"=>0,"message"=>"Failed to Submit Trasaction"],500);
        }
      }else {
        return response(["status"=>0,"message"=>"Failed to Send Transaction"],500);
      }
    }
    public function checksk()
    {
      $sk = session()->get("sk");
      if ($sk == null) {
        return response()->json(["status"=>0]);
      }else {
        return response()->json(["status"=>1]);
      }
    }
    public function balance($asset='')
    {
      if ($asset == '') {
        $pk = Auth::guard("trade_direct")->user()->pk;
        $set = new ArdorTrade($pk);
        return $set->getBalance("native");
      }else {
        $pk = Auth::guard("trade_direct")->user()->pk;
        $set = new ArdorTrade($pk);
        $set->setAsset($asset);
        return $set->getBalance("asset");
      }
    }
    public function myorder(Request $req,$asset)
    {
      $pk = Auth::guard("trade_direct")->user()->pk;
      $new = new ArdorTrade($pk,null);
      $new->setAsset($asset);
      $history = $new->MyOrder();
      $data = [];
      foreach ($history as $key => $value) {
        if ($value->type == "ask") {
          $data[] = ["order"=>"<p class='text-red'>SELL</p>","price_share"=>$value->priceNQTPerShare,"ammount"=>$value->quantityQNT,"total"=>($value->priceNQTPerShare*$value->quantityQNT),"action"=>"<a href='#' class='cancelOrder text-orange' data-type='ask' data-id='".$value->order."'>CANCEL</a>"];
        }else {
          $data[] = ["order"=>"<p class='text-green'>BUY</p>","price_share"=>$value->priceNQTPerShare,"ammount"=>$value->quantityQNT,"total"=>($value->priceNQTPerShare*$value->quantityQNT),"action"=>"<a href='#' class='cancelOrder text-orange' data-type='bid' data-id='".$value->order."'>CANCEL</a>"];
        }
      }
      return datatables($data,"order,price_share,ammount,total,action");
    }
    public function history(Request $req,$asset,$timestamp="")
    {
      $type = $req->input("type");
      $pk = Auth::guard("trade_direct")->user()->pk;
      $my = new ArdorTrade($pk);
      $my->setAsset($asset);
      $res = $my->tradeHistory($timestamp);
      $data = [];
      foreach ($res as $key => $value) {
        $cost = 0;
        $order = "<p class='text-red'>SELL</p>";
        if ($value->tradeType == "buy") {
          $hash = $value->bidOrderFullHash;
          $order = "<p class='text-green'>BUY</p>";
        }else {
          $hash = $value->askOrderFullHash;
        }

        $cost = '<a href="https://ardor.tools/transaction/IGNIS/'.$hash.'" class="text-orange">DETAIL</a>';
        $data[] = ["date"=>date("H:i:s",$my->convertTimestamp($value->timestamp)),"order"=>$order,"price_share"=>$value->priceNQTPerShare,"ammount"=>$value->quantityQNT,"total"=>($value->priceNQTPerShare*$value->quantityQNT),"cost"=>$cost];
      }
      $data = datatables($data,"date,order,price_share,ammount,total,cost");
      return response()->json($data);
    }
}
