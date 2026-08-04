<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DosenMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect('/login');
        }

        if (auth()->user()->role != 'dosen') {
            abort(403, 'Akses ditolak.');
        }

        return $next($request);
    }
}