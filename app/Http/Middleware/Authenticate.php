<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ($request->is('admin/*')) {
            return route('admin.auth.login');
        }
        if ($request->is('volunteer/*')) {
            return route('volunteer.auth.login');
        }   
        if ($request->is('locals/*')) {
            return route('locals.auth.login');
        }   
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
