<?php

namespace Coinvit\Http\Middleware;

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
      if (auth()->check() && auth()->user()->level == "member") {
        return $next($request);
      }
      return response()->json(["status"=>0,"msg"=>"You not Member"]);
    }
}
