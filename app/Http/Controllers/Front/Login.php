<?php

namespace Coinvit\Http\Controllers\Front;

use Illuminate\Http\Request;
use Coinvit\Http\Controllers\Controller;
class Login extends Controller
{
    public function index()
    {
      return view("front.public.login",["title"=>"Login to Trade"]);
    }
}
