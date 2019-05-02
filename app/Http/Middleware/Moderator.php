<?php

namespace Coinvit\Http\Middleware;

use Closure;

class Moderator
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
      if (auth()->check() && auth()->user()->level == "moderator") {
        return $next($request);
      }
      return response()->json(["status"=>0,"msg"=>"You not Moderator"]);
    }
}
