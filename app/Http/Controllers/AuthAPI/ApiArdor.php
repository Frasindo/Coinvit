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
    public function trade(Request $req,$asset)
    {

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
}