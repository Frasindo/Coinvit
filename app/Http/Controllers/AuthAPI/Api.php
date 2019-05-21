<?php

namespace Coinvit\Http\Controllers\AuthAPI;
use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;
use Helpers\ArdorTrade;
class Api extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"You Logged In"]);
    }
    public function trade(Request $req,$asset,$trade)
    {
      if ($trade == "ardor") {
        
      }else{
        return response()->json(["status"=>0,"message"=>"Unknown Blockchain"],500);
      }
    }
}
