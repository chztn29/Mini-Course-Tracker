<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    public function handle(Request $request, Closure $next): Response
     {
         if (!Session::has('loginId')) {
             return back()->with('fail', 'You need to logged in');
         }
         return $next($request);
     }
}
