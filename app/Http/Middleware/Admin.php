<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        $user = $request->user()->getAttributes();
        if($user['role'] != 'admin'){
            return redirect('/home')->with('error','Unauthorized');
        }
        return $next($request);
    }
}
