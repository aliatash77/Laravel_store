<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ChackAdmin
{

    public function handle($request, Closure $next)
    {
        $user=Auth::user();
        if (Auth::check() && $user->type==1 ){
            return $next($request);
        }else{
            abort(403);
        }

    }
}
