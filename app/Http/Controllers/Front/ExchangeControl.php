<?php

namespace Coinvit\Http\Controllers\Front;

use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;
use Coinvit\Token;
use Coinvit\TokenStatistic;
use Helpers\StellarTrade;
use Helpers\ArdorTrade;
class ExchangeControl extends Controller
{
    public function index()
    {
      return redirect("exchange/ardor");
    }
    public function block(Request $req,$block,$asset="4777913785555377445")
    {
      if ($block == "ardor") {
        $infotoken = Token::where(["id_token"=>$asset]);
        $statisticToken = TokenStatistic::where(["id_token"=>$asset])->orderBy("created_at","desc");
        if ($infotoken->count() > 0) {
          $infotoken = $infotoken->first();
          if ($statisticToken->count() > 0) {
            $statisticToken = $statisticToken->first();
          }else {
            $statisticToken = ["volume"=>0,"price"=>0,"price_low"=>0,"price_high"=>0,"spread"=>0];
          }
          return view("front.trade.tradebook",["title"=>$infotoken->name." - IGNIS","statistic"=>$statisticToken,"info"=>$infotoken]);
        }else {
          return redirect("exchange");
        }
      }else {
        return redirect("404");
      }
    }
}
