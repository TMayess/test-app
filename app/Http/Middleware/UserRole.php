<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // interdire l'acces en fonction des role
        $userRole = $request->user()->role;

        if (!in_array($userRole, $roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
