<?php
/**
 * Stellar Trade
 */
namespace Helpers;
use Yosymfony\Toml\Toml;
use Helpers\StellarHelper;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class StellarTrade
{
  public $stellar_node;
  public $pk;
  public $sk;
  public function __construct($pk="",$sk="")
  {
    $this->stellar_node = new StellarHelper();
    $this->pk = $pk;
    $this->sk = $sk;
  }
  public function tomlparser($data,$code)
  {
    $parse = Toml::Parse($data);
    if (isset($parse["CURRENCIES"])) {
      $data  = [];
      foreach ($parse["CURRENCIES"] as $key => $value) {
        if (isset($value["code"])) {
          if ($value["code"] == $code) {
            $data = $value;
            break;
          }
        }
      }
      if (count($data) > 0) {
        return $data;
      }else {
        return false;
      }
    }else {
      return false;
    }
  }
  public function tomlFetch($issuer="")
  {
    $x = $this->stellar_node->request("assets",["asset_issuer"=>$issuer]);
    return $x;
  }
  public function Tokenlist($limit=200,$to_page=2,$save=true,$update=false)
  {
    $count = 1;
    $pagingurl = "";
    $data = [];
    $decimal = function($string){
      return (int) str_replace("credit_alphanum","",$string);
    };
    for ($i=1; $i <= $to_page ; $i++) {
      $config = ["limit"=>$limit];
      if ($pagingurl != "") {
        $config = ["limit"=>$limit,"cursor"=>$pagingurl];
      }
      $x = $this->stellar_node->request("assets",$config);
      $records = $x->_embedded->records;
      if (count($records) == 0) {
        break;
      }
      $pagingurl = $records[(count($records) - 1)]->paging_token;
      foreach ($records as $key => $value) {
        if ($value->_links->toml->href != "") {
          $value->toml = $value->_links->toml->href;
          $value->decimal = $decimal($value->asset_type);
          unset($value->_links);
          $data[] = $value;
          // $data[] = $value->asset_issuer;
        }
      }
    }
    // $pure = array_unique($data);
    // return $data;
    if ($update == true) {
      $d = [];
      $icon = null;
      $desc = null;
      foreach ($data as $key => $value) {
        if ($value->asset_code == "FRAS") {
          $config = ["timeout"=>5,"verify"=>false,"headers"=>["Accept"=>"text/plain","Content-Type"=>"text/plain"]];
        }
        try {
          $guzzled = $guzzle->get($value->toml,$config);
          $guzzled = $guzzled->getBody()->getContents();
          $toml = $this->tomlparser($guzzled,$value->asset_code);
        } catch (\GuzzleHttp\Exception\ConnectException $e) {
          continue;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
          continue;
        } catch (\GuzzleHttp\Exception\ServerException $e) {
          continue;
        }catch (\Yosymfony\Toml\Exception\ParseException $e) {
          $icon = null;
          $desc = null;
        }
        if ($toml == false) {
          continue;
        }
        $verify = ["code","name","issuer","display_decimals","desc","conditions","image"];
        if (isset($toml["desc"])) {
          $desc = $toml["desc"];
        }
        if (isset($toml["image"])) {
          $icon = $toml["image"];
        }
        $d[] = ["id_token"=>(md5($value->paging_token)),"issuer"=>$value->asset_issuer,"name"=>$value->asset_code,"decimal"=>$value->decimal,"icon"=>$icon,"desc"=>$desc,"id_blockchain"=>2,"created_at"=>date("Y-m-d H:i:s"),"toml"=>$value->toml];
      }
      $list = \Coinvit\Token::where(["id_blockchain"=>2])->get();
      foreach ($list as $key => $value) {
          foreach ($d as $k => $v) {
            if ($v["id_token"] == $value->id_token) {
              $up = new \Coinvit\Token();
              $up->icon = $v["icon"];
              $up->desc = $v["desc"];
              $up->name = $v["name"];
              $up->save();
            }
          }
      }
      return ["status"=>1,"msg"=>"Updated"];
    }else {
      $guzzle = new Client();
      $config = ["timeout"=>0.5,"verify"=>false,"headers"=>["Accept"=>"text/plain","Content-Type"=>"text/plain"]];
      if ($save) {
        $d = [];
        $icon = null;
        $desc = null;
        foreach ($data as $key => $value) {
          if ($value->asset_code == "FRAS") {
            $config = ["timeout"=>5,"verify"=>false,"headers"=>["Accept"=>"text/plain","Content-Type"=>"text/plain"]];
          }
          try {
            $guzzled = $guzzle->get($value->toml,$config);
            $guzzled = $guzzled->getBody()->getContents();
            $toml = $this->tomlparser($guzzled,$value->asset_code);
          } catch (\GuzzleHttp\Exception\ConnectException $e) {
            continue;
          } catch (\GuzzleHttp\Exception\ClientException $e) {
            continue;
          } catch (\GuzzleHttp\Exception\ServerException $e) {
            continue;
          }catch (\Yosymfony\Toml\Exception\ParseException $e) {
            $icon = null;
            $desc = null;
          }
          $verify = ["code","name","issuer","display_decimals","desc","conditions","image"];
          if (isset($toml["desc"])) {
            $desc = $toml["desc"];
          }
          if (isset($toml["image"])) {
            $icon = $toml["image"];
          }
          $d[] = ["id_token"=>(md5($value->paging_token)),"issuer"=>$value->asset_issuer,"name"=>$value->asset_code,"decimal"=>$value->decimal,"icon"=>$icon,"desc"=>$desc,"id_blockchain"=>2,"created_at"=>date("Y-m-d H:i:s"),"toml"=>$value->toml];
        }
        $ins = \Coinvit\Token::insert($d);
        if ($ins) {
          return ["status"=>1,"msg"=>"Success"];
        }else {
          return ["status"=>0,"msg"=>"Failed"];
        }
      }else {
        return $data;
      }
    }
  }
  public function Statistic()
  {

  }
}
