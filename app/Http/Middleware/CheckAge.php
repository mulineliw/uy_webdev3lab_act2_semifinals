<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the 'age' parameter in the URL is less than 18
        if ($request->age < 18) {
            // Redirect the user back to the homepage
            return redirect('/');
        }

        // Otherwise, allow the request to proceed
        return $next($request);
    }
}