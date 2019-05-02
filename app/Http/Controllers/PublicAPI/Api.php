<?php

namespace Coinvit\Http\Controllers\PublicAPI;
use Helpers\ArdorHelper;
use Helpers\ArdorTrade;
use Illuminate\Http\Request;
use Coinvit\User;
use Coinvit\TabelKegiatan;
use Coinvit\Http\Controllers\Controller;
use Auth;
class Api extends Controller
{
    public function index()
    {
      return response()->json(["status"=>1,"msg"=>"Welcome to Public API Coinvit 0.0.1"]);
    }
    public function login(Request $req)
    {
        $this->validate($req,[
          "email"=>"required|exists:users,email",
          "password"=>"required",
        ]);
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
          return response()->json(["status"=>1,"msg"=>"Login Success","data"=>auth()->user()]);
        }else {
          return response()->json(["status"=>0,"msg"=>"Invalid Credentials"]);
        }
    }
    public function validation()
    {
      if (auth()->check()) {
        return response()->json(["status"=>1,"msg"=>"Credential Valid","data"=>auth()->user()]);
      }else {
        return response()->json(["status"=>0,"msg"=>"Credential Expired"]);
      }
    }
    public function listtoken()
    {
      // code...
    }
}
