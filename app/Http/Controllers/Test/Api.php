<?php

namespace Coinvit\Http\Controllers\Test;
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
      $obj = new ArdorTrade("ARDOR-UX8E-KERB-8BQY-9B3NH","l23OKIwgreoh0LEvjTi64XZpanf57MYcqDJ");
      $obj->setAssets("4777913785555377445");
      if ($obj->validation()) {
        $res = $obj->ask("0.1","2.5");
        return response()->json($res);
      }else {
        return response()->json(["status"=>0,"msg"=>"Request Timeout"]);
      }
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

}
