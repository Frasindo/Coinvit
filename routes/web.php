<?php
use Helpers\ExchangeHelper;
use Helpers\StellarTrade;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['web']], function () {
  Route::get('/',"Front\Home@index");
  Route::get('/login',"Front\Login@index");
  Route::get('/logout',function(){
    auth()->logout();
    session()->flush();
    return redirect(url("/"));
  });
  Route::get('/exchange',"Front\ExchangeControl@index");
  Route::get('/test',function(){
    $new = new StellarTrade();
    $date  = $new->Tokenlist(200,30);
    return response()->json($date);
  });
  Route::get('/api',"PublicAPI\Api@index");
  Route::post('/api/login',"PublicAPI\Api@login");
  Route::get('/api/validation',"PublicAPI\Api@validation");
  Route::get('/api/token/{id?}/{add?}',"PublicAPI\Api@listtoken");
  Route::get('/api/orderbook/{asset?}/{address?}',"PublicAPI\Api@orderbook");
  Route::get('/api/token_list/{block?}',"PublicAPI\Api@tokentable");
  Route::get('/api/topgain/{block?}',"PublicAPI\Api@topgain");
});
Route::group(['middleware' => ['member']], function () {
  Route::get('/exchange/{block}/{asset?}',"Front\ExchangeControl@block");
  Route::post('/api/trade/{asset}/{chain}',"AuthAPI\Api@trade");
});
Route::group(['middleware' => ['admin']], function () {
  Route::get('/middleware',"AuthAPI\Api@index");
});
Route::group(['funder' => ['funder']], function () {
  Route::get('/funder',"AuthAPI\Api@index");
});
Route::group(['moderator' => ['moderator']], function () {
  Route::get('/moderator',"AuthAPI\Api@index");
});
