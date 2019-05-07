<?php
use Helpers\ArdorTrade;
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
  Route::get('/test',function(){
    $obj = new ArdorTrade();
    $date = $obj->loopDates("2015-01-01","2015-01-05");
    return response()->json($date);
  });
  Route::get('/api',"PublicAPI\Api@index");
  Route::post('/api/login',"PublicAPI\Api@login");
  Route::get('/api/validation',"PublicAPI\Api@validation");
  Route::get('/api/token/{id?}/{add?}',"PublicAPI\Api@listtoken");
  Route::get('/api/orderbook/{asset?}/{address?}',"PublicAPI\Api@orderbook");
});
Route::group(['middleware' => ['member']], function () {
  Route::get('/member',"AuthAPI\Api@index");
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
