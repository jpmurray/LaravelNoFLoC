<?php

namespace jpmurray\LaravelNoFLoC\Middleware;

use Closure;

class NoFLoCMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $response->headers->set('Permissions-Policy', 'interest-cohort=()');

        return $response;
    }
}
