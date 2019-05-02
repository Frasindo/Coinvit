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
  public $cur = "100000000";
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
  public function normalNum($val,$reverse=false)
  {
    if ($reverse) {
      return $val*$this->cur;
    }else {
      return $val/$this->cur;
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
