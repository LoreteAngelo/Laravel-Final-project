<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $username =$request->input('username');
        $password =$request->input('password');
        
    if($username ==='admin' && $password ==='admin'){

    }
    else
    {

        return redirect('/login')->withErrors(['error'=>'invalid credentials']);
    }
}