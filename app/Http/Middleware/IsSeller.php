<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSeller
{
    public function handle(Request $request, Closure $next): Response
    {
        // Get the current logged-in user's role
        $role = $request->user()->role;

        // If they are a cooperative or admin, let them access the page!
        if ($role === 'cooperative' || $role === 'admin') {
            return $next($request);
        }

        // If they are a customer (or anything else), kick them back to the market
        return redirect()->route('market');
    }
}