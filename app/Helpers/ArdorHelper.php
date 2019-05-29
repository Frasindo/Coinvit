<?php
/**
* Ardor Helper V 0.0.0.1
*/
namespace Helpers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class ArdorHelper
{
  public $ip;
  public $cur8 = "00000000";
  public $cur7 = "0000000";
  public $cur6 = "000000";
  public $cur5 = "00000";
  public $cur4 = "0000";
  public $cur3 = "000";
  public $cur2 = "00";
  public $cur1 = "0";
  public $cur0 = "";
  public $guzzle;
  public $config = ['connect_timeout' => 3.14];
  function __construct($ip="")
  {
    $this->ip = $ip;
    $this->guzzle = new Client();
  }
  public function Validation()
  {
    $get = $this->guzzle->get($this->ip,$this->config);
    if ($get->getStatusCode() == "200") {
      return true;
    }else {
      return false;
    }
  }
  public function feeNQT($get)
  {
    return $get->transactionJSON->feeNQT;
  }
  public function normalNum($val,$reverse=false,$digit=8)
  {
    $digit = "cur".$digit;
    if ($reverse) {
      return $val*("1".$this->{$digit});
    }else {
      return $val/("1".$this->{$digit});
    }
  }
  public function request($type,$method,$data=[])
  {
    if ($type == "post") {
      $d = ["form_params"=>$data];
      $obj = $this->guzzle->post($this->ip."/nxt?requestType=".$method,$d);
      return json_decode($obj->getBody()->getContents());
    }elseif ($type == "get") {
      if (count($data) > 0) {
        $data = $this->ip."/nxt?requestType=".$method."&".http_build_query($data);
      }else {
        $data = $this->ip."/nxt?requestType=".$method;
      }
      $obj = $this->guzzle->get($data);
      return json_decode($obj->getBody()->getContents());
    }else {
      return false;
    }
  }
}
