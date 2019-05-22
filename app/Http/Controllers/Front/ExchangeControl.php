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
          $value = $infotoken->first();
          $getStat = \Coinvit\TokenStatistic::where(["id_token"=>$asset])->orderBy("created_at","desc")->get();
          $now = $getStat[0];
          $vol = $now->volume;
          $change_color = 'text-default';
          $change_icon = '';
          $change_value = 0;
          if (!isset($getStat[1]->price)) {
            $change_color = 'text-default';
            $change_icon = '';
            $change_value = 0;
          }else {
            $change_value = ($now->price - $getStat[1]->price);
            if ($change_value > 0) {
              $change_icon = 'fa fa-caret-up';
              $change_color = 'text-green';
            }elseif($change_value < 0) {
              $change_icon = 'fa fa-caret-down';
              $change_color = 'text-red';
            }
          }
          if ($value->icon != null) {
            $icon = $value->icon;
          }else {
            $icon = url("assets/logo/blank.png");
          }
          $cekFav = \Coinvit\TokenFavorite::where(["id_token"=>$asset])->count();
          $start = 'fa fa-star-o text-yellow';
          if ($cekFav > 0) {
            $start = "fa fa-star text-yellow";
          }
          $data = ["id_token"=>$asset,"icon_start"=>$start,"name"=>$value->name,"volume"=>$vol,"logo"=>$icon,"change_value"=>$change_value,"change_icon"=>$change_icon,"change_color"=>$change_color,"price"=>number_format($now->price,6),"l"=>number_format($now->price_low,6),"h"=>number_format($now->price_high,6)];

          return view("front.trade.tradebook",["title"=>$data["name"]." - IGNIS","info"=>$data,"block"=>$block]);
        }else {
          return redirect("exchange");
        }
      }else {
        return redirect("404");
      }
    }
}
