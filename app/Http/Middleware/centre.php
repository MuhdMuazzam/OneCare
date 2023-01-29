<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class centre
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
        // if($request->user()->isRegistered == "1")
        // {
        // return $next($request);
        // }
        // return redirect('/locals/checkin');        
        // }
        $user = User::where('id', '=', Input::get('id'))->first();
        if ($user === null) {
          return view('/locals/viewprofile');
        }
 
         return $next($request);
     }

}