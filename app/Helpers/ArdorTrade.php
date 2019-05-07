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
    $this->ardor = new ArdorHelper("http://178.150.207.53:27876");
  }
  public function setAsset($assets='')
  {
      $this->asset = (string) $assets;
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
  public function ask($price,$price_per,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","placeAskOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
    }
    if (isset($get->errorDescription)) {
      return ["status"=>0,"data"=>$get];
    }else {
      return ["status"=>1,"data"=>$get];
    }
  }
  public function bid($price,$price_per,$fee=null)
  {
    $obj = $this->ardor;
    if ($fee == null) {
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key]);
      if (isset($get->errorDescription)) {
        return ["status"=>0,"msg"=>"Order Not Found"];
      }
      $fee = $obj->feeNQT($get);
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$fee]);
    }else {
      $get = $obj->request("post","placeBidOrder",["chain"=>"2","asset"=>$this->asset,"quantityQNT"=>$obj->normalNum($price,true),"priceNQTPerShare"=>$obj->normalNum($price,true),"secretPhrase"=>$this->secret_key,"feeNQT"=>$obj->normalNum($fee,true)]);
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
    if (count($history->askOrders) > 0) {
      return $this->convertNQT($history->askOrders);
    }else {
      return false;
    }
  }
  public function MyBidHistory()
  {
    $obj = $this->ardor;
    $history = $obj->request("get","getAccountCurrentBidOrders",["chain"=>2,"account"=>$this->public_key,"asset"=>$this->asset]);
    if (count($history->bidOrders) > 0) {
      return $this->convertNQT($history->bidOrders);
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
  public function AskHistory()
  {
    $obj = $this->ardor;
    $history = $obj->request("get","getAskOrders",["chain"=>2,"asset"=>$this->asset]);
    if (count($history->askOrders) > 0) {
      return $this->convertNQT($history->askOrders);
    }else {
      return false;
    }
  }
  public function BidHistory()
  {
    $obj = $this->ardor;
    $history = $obj->request("get","getBidOrders",["chain"=>2,"asset"=>$this->asset]);
    if (count($history->bidOrders) > 0) {
      return $this->convertNQT($history->bidOrders);
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
  public function LastTrade()
  {
    $obj = $this->ardor;
    $last = $obj->request("get","getLastTrades",["chain"=>2,"assets"=>$this->asset]);
    if (isset($last->trades[0]->priceNQTPerShare)) {
      return $obj->normalNum($last->trades[0]->priceNQTPerShare);
    }else {
      return 0;
    }
  }
  public function loopDates($start_date,$end_date)
  {
    $data = [];
    while (strtotime($start_date) <= strtotime($end_date)) {
        $data[] = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
    }
    return $data;
  }
  public function Volume($asset = null,$start,$end)
  {

    if ($asset == null) {
      $asset = $this->asset;
    }

  }
  public function Statistic($asset = null)
  {
    if ($asset == null) {
      $asset = $this->asset;
    }

  }
}
