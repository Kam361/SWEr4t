<?php

namespace App\Http\Middleware;
use Auth;
use Closure;
use App\User;
use Session;
//use mysql_xdevapi\Session;

class admin
{
    /**
     * Handle an incoming request.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//            if (Auth::user() && !Auth::user()->admin == 1 )

            if (Auth::check() && Auth::user()->role == 1 )
            {
                return $next($request);

            }
            else{
                Session::flash('info', 'You do not have permission to perform this action');

                return redirect()->route('index');
            }


    }
}