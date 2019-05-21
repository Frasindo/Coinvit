<?php

namespace Coinvit\Http\Middleware;
use Auth;
use Closure;

class Member
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if (! $request->expectsJson()) {
          if (auth()->check() && auth()->user()->level == "member") {
            return $next($request);
          }else {
            if (Auth::guard("trade_direct")->check()) {
              return $next($request);
            }
          }
          return redirect(url('login'));
      }else {
        if (auth()->check() && auth()->user()->level == "member") {
          return $next($request);
        }else {
          if (Auth::guard("trade_direct")->check()) {
            return $next($request);
          }
        }
        return response()->json(["status"=>0,"msg"=>"You not Member"],404);
      }
    }
}
