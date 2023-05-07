<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifiedValidation
{

    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            if (!auth()->user()->email_verified_at) {
                return redirect()->route('verification.notice');
            }
        }

        return $next($request);
    }
}
