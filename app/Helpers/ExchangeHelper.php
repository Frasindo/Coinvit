<?php
function spread($up,$down)
{
  return (($up-$down)*100)/$up;
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
