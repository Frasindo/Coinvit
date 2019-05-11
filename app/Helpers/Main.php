<?php
function datatablesConvert($res=[],$select="")
{
  $data = [];
  $data["data"] = [];
  foreach ($res as $key => $value) {
    $inner = [];
    $exp = explode(",",$select);
    foreach ($exp as $k => $v) {
      $inner[] = $value["$v"];
    }
    $data["data"][] = $inner;
  }
  return $data;
}
function sort_vol($a, $b) {
    return $a['volume'] < $b['volume'];
}
function sort_change($a, $b) {
    return $a['change'] < $b['change'];
}
