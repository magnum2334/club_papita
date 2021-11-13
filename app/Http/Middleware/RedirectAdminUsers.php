<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectAdminUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($role == 'corporate' && !\Auth::user()->hasRole('UserCorporate')){
            return redirect('/admin');
        }
        return $next($request);
    }
}
