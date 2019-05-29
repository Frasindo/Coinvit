<?php
namespace Helpers;
use Helpers\ArdorHelper;
/**
 * Trade Ardor
 */
class ArdorTrade
{
  public $secret_key;
  public $asset;
  public $ardor;
  public $public_key;
  function __construct($public_key="",$secret_key="")
  {
    $this->secret_key = $secret_key;
    $this->public_key = $public_key;
    $this->ardor = new ArdorHelper(env("PEER","http://178.150.207.53:27876"));
  }
  public function setAsset($assets='')
  {
      $this->asset = (string) $assets;
  }
  public function tradeHistory($timestamp="")
  {
    if ($this->asset != '') {
      if ($this->public_key != '') {
        if ($timestamp != "") {
          $get = $this->ardor->request("get","getTrades",["chain"=>2,"asset"=>$this->asset,"account"=>$this->public_key,"timestamp"=>$this->convertTimestamp(strtotime($timestamp),true)]);
        }else {
          $get = $this->ardor->request("get","getTrades",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
        }
      }else {
          if ($timestamp != "") {
            $get = $this->ardor->request("get","getTrades",["chain"=>2,"asset"=>$this->asset,"timestamp"=>$this->convertTimestamp(strtotime($timestamp),true)]);
          }else {
            $get = $this->ardor->request("get","getTrades",["chain"=>2,"asset"=>$this->asset]);
          }
      }
      return $this->convertNQT($get->trades);
    }else {
      return false;
    }
  }
  public function validation()
  {
    $check = $this->ardor->request("get","getAsset",["asset"=>$this->asset]);
    if (isset($check->errorDescription)) {
      return false;
    }else {
      return true;
    }
  }
  public function isvalidacc()
  {
    if ($this->secret_key != '') {
      $getaddr = $this->ardor->request("get","getAccountId",["secretPhrase"=>$this->secret_key]);
      $getaddr = $getaddr->accountRS;
    }elseif ($this->public_key !='') {
      $getaddr = $this->public_key;
    }else {
      return ["status"=>0,"message"=>"You not Filled Anything"];
    }
    $check = $this->ardor->request("get","getAccount",["account"=>$getaddr]);
    if (isset($check->errorDescription)) {
      return ["status"=>0,"message"=>$check->errorDescription];
    }else {
      return ["status"=>1,"debug"=>$check,"pk"=>$getaddr];
    }
  }
  public function ask($price,$price_per,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
    }
    if (isset($get->errorDescription)) {
      return ["status"=>0,"data"=>$get];
    }else {
      return ["status"=>1,"data"=>$get];
    }
  }
  public function transcation($hash='')
  {
    $get = $this->ardor->request("get","getTransaction",["chain"=>2,"fullHash"=>$hash]);
    return $get;
  }
  public function bid($price,$price_per,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price_per,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
    }
    if (isset($get->errorDescription)) {
      return ["status"=>0,"data"=>$get];
    }else {
      return ["status"=>1,"data"=>$get];
    }
  }
  public function cancelAsk($order,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","cancelAskOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","cancelAskOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","cancelAskOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
    }
    if (isset($get->errorDescription)) {
      return ["status"=>0,"data"=>$get];
    }else {
      return ["status"=>1,"data"=>$get];
    }
  }
  public function cancelBid($order,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","cancelBidOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","cancelBidOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","cancelBidOrder",["chain"=>"2","order"=>$order,"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
    }
    if (isset($get->errorDescription)) {
      return ["status"=>0,"data"=>$get];
    }else {
      return ["status"=>1,"data"=>$get];
    }
  }
  public function MyAskHistory()
  {
    $obj = $this->ardor;
    $history = $obj->request("get","getAccountCurrentAskOrders",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
    if (isset($history->askOrders)) {
      if (count($history->askOrders) > 0) {
        return $this->convertNQT($history->askOrders);
      }else {
        return false;
      }
    }else {
      return false;
    }
  }
  public function MyBidHistory()
  {
    $obj = $this->ardor;
    $history = $obj->request("get","getAccountCurrentBidOrders",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
    if (isset($history->bidOrders)) {
      if (count($history->bidOrders) > 0) {
        return $this->convertNQT($history->bidOrders);
      }else {
        return false;
      }
    }else {
      return false;
    }
  }
  public function getBalance($type='native')
  {
    if ($type == "native") {
      $x = $this->ardor->request("get","getBalance",["chain"=>2,"account"=>$this->public_key]);
      if (!isset($x->balanceNQT)) {
        return 0;
      }
      return $this->bridge("normalNum",($x->unconfirmedBalanceNQT));
    }elseif ($type == 'asset') {
      $x = $this->ardor->request("get","getAccountAssets",["asset"=>$this->asset,"account"=>$this->public_key]);
      if (!isset($x->quantityQNT)) {
        return 0;
      }
      return $this->bridge("normalNum",($x->unconfirmedQuantityQNT));
    }else {
      return false;
    }
  }
  public function convertNQT($data=[],$qnt=["quantityQNT","priceNQTPerShare"])
  {
    $obj = $this->ardor;
    foreach ($data as $key => &$value) {
      foreach ($qnt as $k => $v) {
        $value->{$v} = $obj->normalNum($value->{$v});
      }
    }
    return $data;
  }
  public function bridge($obj,$val)
  {
    $s = $this->ardor->{$obj}($val);
    return $s;
  }
  public function AskHistory($asset = "")
  {
    if ($asset == "") {
      $asset = $this->asset;
    }
    $obj = $this->ardor;
    $history = $obj->request("get","getAskOrders",["chain"=>2,"asset"=>$asset]);
    if (isset($history->askOrders)) {
      if (count($history->askOrders) > 0) {
        return $this->convertNQT($history->askOrders);
      }else {
        return false;
      }
    }else {
      return false;
    }
  }
  public function BidHistory($asset = "")
  {
    if ($asset == "") {
      $asset = $this->asset;
    }
    $obj = $this->ardor;
    $history = $obj->request("get","getBidOrders",["chain"=>2,"asset"=>$asset]);
    if (isset($history->bidOrders)) {
      if (count($history->bidOrders) > 0) {
        return $this->convertNQT($history->bidOrders);
      }else {
        return false;
      }
    }else {
      return false;
    }
  }
  public function Token($search='')
  {
    if ($search == '') {
      return $this->ardor->request("get","getAllAssets");
    }else {
      return [];
    }
  }
  public function convertTimestamp($epoch=0,$reverse = false)
  {
    $begin = strtotime("2018-01-01 00:00:00 +0000");
    if ($reverse) {
      return ($epoch  - $begin + 500);
    }else {
      return ($epoch  + $begin - 500);
    }
  }
  public function LastTrade($asset = "")
  {
    $obj = $this->ardor;
    if ($asset == '') {
      $asset = $this->asset;
    }
    $last = $obj->request("get","getTrades",["chain"=>2,"asset"=>$asset]);
    if (isset($last->trades[0]->priceNQTPerShare)) {
      return $obj->normalNum($last->trades[0]->priceNQTPerShare);
    }else {
      return 0;
    }
  }
  public function MyOrder()
  {
    $obj = $this->ardor;
    $historyBid = $obj->request("get","getAccountCurrentBidOrders",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
    $historyAsk = $obj->request("get","getAccountCurrentAskOrders",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
    if (isset($historyBid->bidOrders) || isset($historyAsk->askOrders)) {
      $data = [];
      if (count($historyBid->bidOrders) > 0) {
        $bid =  $this->convertNQT($historyBid->bidOrders);
        foreach ($bid as $key => $value) {
          $data[] = $value;
        }
      }
      if (count($historyAsk->askOrders) > 0) {
        $ask =  $this->convertNQT($historyAsk->askOrders);
        foreach ($ask as $key => $value) {
          $data[] = $value;
        }
      }
      usort($data,"order_sort");
      return $data;
    }else {
      return false;
    }
  }
  public function loopDates($start_date,$end_date,$nxtmode = false)
  {
    $date = $start_date;
    $end_date = $end_date;
    $data = [];
    while (strtotime($date) <= strtotime($end_date)) {
        if ($nxtmode) {
          $data[]  = $this->convertTimestamp(strtotime($date),true);
        }else {
          $data[]  = $date;
        }
         $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
    }
    return $data;
  }
  public function Volume($asset = null,$start,$end)
  {

    if ($asset == null) {
      $asset = $this->asset;
    }
    $obj = $this->ardor;
    $dates = $this->loopDates($start,$end,true);
    $vol = 0;
    foreach ($dates as $key => $value) {
        $get = $obj->request("get","getTrades",["chain"=>2,"asset"=>$asset,"timestamp"=>$value]);
        if (!isset($get->trades) || count($get->trades) < 1) {
          $vol = $vol + 0;
        }else {
          foreach ($get->trades as $k => $v) {
            $vol = $vol + $v->quantityQNT;
          }
        }
    }
    return $obj->normalNum($vol);
  }
  public function timeHL($asset,$timestamp=null)
  {
    if ($asset == null) {
      $asset = $this->asset;
    }
    $obj = $this->ardor;
    if ($timestamp != null) {
      $get = $obj->request("get","getTrades",["chain"=>2,"asset"=>$asset,"timestamp"=>$timestamp]);
    }else {
      $get = $obj->request("get","getTrades",["chain"=>2,"asset"=>$asset]);
    }
    if (!isset($get->trades) || count($get->trades) < 1) {
      return 0;
    }else {
      $res = [];
      foreach ($get->trades as $key => $value) {
          $res[] = $value->priceNQTPerShare;
      }
      if (count($res) > 0) {
        if ($obj->normalNum(min($res)) == null || $obj->normalNum(max($res)) == null) {
          return ["low"=>0,"max"=>0];
        }
        return ["low"=>$obj->normalNum(min($res)),"max"=>$obj->normalNum(max($res))];
      }else {
        return ["low"=>0,"max"=>0];
      }
    }
  }
  public function spread($up,$down)
  {
    return (($up-$down)*100)/$up;
  }
  public function Statistic($asset = null,$date,$save=true)
  {
    $time = $this->convertTimestamp(strtotime($date),true);
    if ($asset == null) {
      $token = \Coinvit\Token::all();
    }else {
      $token = \Coinvit\Token::where(["id_token"=>$asset])->get();
    }
    $data = [];
    $limit = 0;
    foreach ($token as $key => $value) {
      $id = $value->id_token;
      $asset = $id;
      $vol = $this->Volume($value->id_token,$date,$date);
      $lp = $this->LastTrade($asset);
      $hl = $this->timeHL($asset,$time);
      $spread = function($asset){
        $a = $this->BidHistory($asset);
        $b = $this->AskHistory($asset);
        if ($a == FALSE || $b == FALSE) {
          return 0;
        }
        $ac = [];
        foreach ($a as $key => $value) {
          $ac[] = $value->priceNQTPerShare;
        }
        $bc = [];
        foreach ($b as $key => $value) {
          $bc[] = $value->priceNQTPerShare;
        }
        return $this->spread(min($bc),max($ac));
      };
      $s = $spread($asset);
      $h = $hl["max"];
      $l = $hl["low"];
      if ($h == null) {
        $h = 0;
      }
      if ($l == null) {
        $l = 0;
      }
      $data[] = ["id_token"=>$id,"volume"=>$vol,"price"=>$lp,"price_low"=>$l,"price_high"=>$h,"spread"=>$s,"created_at"=>date("Y-m-d H:i:s")];
    }
    if ($save) {
      $set = \Coinvit\TokenStatistic::insert($data);
      if ($set) {
        return ["status"=>1];
      }else {
        return ["status"=>0];
      }
    }
    return $data;
  }
}
