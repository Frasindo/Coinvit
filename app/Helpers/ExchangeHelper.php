<?php
function spread($up,$down)
{
  return (($up-$down)*100)/$up;
}
function getDigit($id)
{
  $x = \Coinvit\Token::where(["id_token"=>$id])->first()->decimal;
  return $x;
}
function convertCrypto($from="",$to="",$all=false)
{
  // $cmc = new CoinMarketCap\Api('yourApiClient');
  $cmc = new CoinMarketCap\Api('b0f49620-4e45-4080-86f9-658dfab7000e');
  $response = $cmc->cryptocurrency()->quotesLatest(['symbol' => $from, 'convert' => $to]);
  if ($all) {
    return $response->data->{$from}->quote->{$to};
  }
  return $response->data->{$from}->quote->{$to}->price;
}
function line($type='',$percent)
{
  if ($type == "buy") {
    return "background: linear-gradient(to left, rgb(220, 246, 222) 94.1%, rgb(255, 255, 255) ".$percent."%);";
  }else {
    return "background: linear-gradient(to right, rgb(254, 214, 216) 89.7%, rgb(249, 249, 249) ".$percent."%);";
  }
}
