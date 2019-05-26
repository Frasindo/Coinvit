<?php
function datatablesConvert($res=[],$select="",$total=0)
{
  $data = [];
  $data["recordsTotal"] = $total;
  $data["recordsFiltered"] = $total;
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
function datatables($res=[],$select="")
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
function bid_sort($a, $b) {
    return $a->priceNQTPerShare < $b->priceNQTPerShare;
}
function ask_sort($a, $b) {
    return $a->priceNQTPerShare > $b->priceNQTPerShare;
}
function order_sort($a, $b) {
    return $a->order > $b->order;
}
function sort_change($a, $b) {
    return $a['change'] < $b['change'];
}
