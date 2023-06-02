<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CacheControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $response->header('Cache-Control', 'public, max-age=604800'); // 86400 Cache for 24 hours // 604800 Cache for 1 week 

        return $response;
    }
}
