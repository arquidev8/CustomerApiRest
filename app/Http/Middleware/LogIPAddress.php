<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogIPAddress
{
    public function handle(Request $request, Closure $next)
    {
        $request->merge(['ipAddress' => $request->ip()]); // Agrega la dirección IP a la solicitud
        return $next($request);
    }
}
