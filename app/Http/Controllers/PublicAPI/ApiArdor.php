<?php

namespace Coinvit\Http\Controllers\PublicAPI;

use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;
use Helpers\ArdorHelper;
use Helpers\StellarTrade;
use Helpers\ExchangeHelper;
use Helpers\ArdorTrade;
use Coinvit\User;
use Coinvit\TabelKegiatan;
use Coinvit\Token;
use Coinvit\Blockchain;
use Auth;
use Coinvit\DirectUser;
use \Illuminate\Contracts\Auth\Authenticatable;
class ApiArdor extends Controller
{
  public function orderbook(Request $req,$block='',$asset='',$address='')
  {
    $sum = function($data,$myorder=[],$type=''){
      $t = [];
      $ts = 0;
      $color = "";
      if ($type == 'sell') {
        $color = "text-red";
        $icon = 'left';
      }elseif($type == 'buy') {
        $icon = 'right';
        $color = "text-green";
      }
      foreach ($data as $key => $value) {
        $t[] = ($value->quantityQNT * $value->priceNQTPerShare) + $ts;
        $ts = ($value->quantityQNT * $value->priceNQTPerShare) + $ts;
      }
      foreach ($data as $key => &$value) {
        $value->sum = number_format($t[$key],4);
        $value->totalIgnis = number_format($value->quantityQNT * $value->priceNQTPerShare,4);
        if ($value->type == "ask") {
          $value->action = '<span data-id="'.$value->order.'" class="text-green buy">BUY</span>';
        }else {
          $value->action = '<span data-id="'.$value->order.'" class="text-red sell">SELL</span>';
        }
        $value->my = "";
        foreach ($myorder as $k => $v) {
          if ($v->order == $value->order) {
            $value->my = "<li class='fa fa-angle-double-".$icon." ".$color."'></li>";
            break;
          }
        }
      }
      return $data;
    };
    $array = function($data){
      $temp = [];
      foreach ($data as $key => $value) {
        $temp[] = (array) $value;
      }
      return $temp;
    };
    $type = $req->input("type");
    if ($block == 'ardor') {
      if ($asset != '') {
        if ($address != '') {
          $obj = new ArdorTrade($address);
          $obj->setAsset($asset);
          $ask = $obj->MyAskHistory();
          $bid = $obj->MyBidHistory();
          $myorderBid = [];
          $myorderAsk = [];
          if (Auth::check()) {
          }else {
            $pk = Auth::guard("trade_direct")->user()->pk;
          }
          if ($ask == false) {
            $ask = [];
          }
          if ($bid == false) {
            $bid = [];
          }
          usort($bid,"bid_sort");
          usort($ask,"ask_sort");
          $bid = $sum($bid,$myorderBid,"buy");
          $ask = $sum($ask,$myorderAsk,"sell");
          $arrayBid = $array($bid);
          $arrayAsk = $array($ask);

          if ($type != null) {
            if ($type == "buy") {
              return response()->json(datatables($arrayBuy,"my,quantityQNT,priceNQTPerShare,totalIgnis,sum,action"));
            }else {
              return response()->json(datatables($arrayAsk,"action,sum,totalIgnis,priceNQTPerShare,quantityQNT,my"));
            }
          }
          return response()->json(["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]]);
        }else {
          $obj = new ArdorTrade(null,null);
          $obj->setAsset($asset);
          $ask = $obj->AskHistory();
          $bid = $obj->BidHistory();
          $myorderBid = [];
          $myorderAsk = [];
          if (Auth::check()) {

          }else {
            $pk = Auth::guard("trade_direct")->user()->pk;
            $new = new ArdorTrade($pk,null);
            $new->setAsset($asset);
            $askNew = $new->MyAskHistory();
            $bidNew = $new->MyBidHistory();
            if ($askNew == false) {
              $askNew = [];
            }
            if ($bidNew == false) {
              $bidNew = [];
            }
            $myorderAsk = $askNew;
            $myorderBid = $bidNew;
            // return $myorderAsk;
          }
          if ($ask == false) {
            $ask = [];
          }
          if ($bid == false) {
            $bid = [];
          }
          usort($bid,"bid_sort");
          usort($ask,"ask_sort");
          $bid = $sum($bid,$myorderBid,"buy");
          $ask = $sum($ask,$myorderAsk,"sell");
          $arrayBid = $array($bid);
          $arrayAsk = $array($ask);

          if ($type != null) {
            if ($type == "buy") {
              return response()->json(datatables($arrayBid,"my,sum,totalIgnis,priceNQTPerShare,quantityQNT,action"));
            }else {
              return response()->json(datatables($arrayAsk,"action,quantityQNT,priceNQTPerShare,totalIgnis,sum,my"));
            }
          }
          return response()->json(["status"=>1,"data"=>["ask"=>$ask,"bid"=>$bid]]);
        }
      }else {
        return response()->json(["status"=>0,"msg"=>"Fill Asset"]);
      }
    }else {
      return response()->json(["status"=>0,"message"=>"No Block Found"],404);
    }

  }
}