<?php
/**
 * Stellar Helper Wrapper
 */
 namespace Helpers;
 use GuzzleHttp\Exception\GuzzleException;
 use GuzzleHttp\Client;
class StellarHelper
{
  public $ip;
  public $guzzle;
  public $config = ['connect_timeout' => 3.14];
  function __construct($ip="https://horizon.stellar.org")
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
  public function request($method,$data=[])
  {
      if (count($data) > 0) {
        $data = $this->ip."/".$method."?".http_build_query($data);
      }else {
        $data = $this->ip."/".$method;
      }
      $obj = $this->guzzle->get($data);
      return json_decode($obj->getBody()->getContents());
  }

}
