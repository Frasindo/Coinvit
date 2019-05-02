<?php

namespace Coinvit\Http\Controllers\AuthAPI;
use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;

class Api extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"You Logged In"]);
    }
}
