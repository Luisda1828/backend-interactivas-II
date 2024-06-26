<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckActiveCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar si la cookie 'active_cookie' existe
        if (!$request->hasCookie('cookieAdm')) {
            // Redirigir a una página de login o mostrar un mensaje de error
            return redirect('/')->with('error', 'Necesitas iniciar sesión para acceder a esta página.');
        }

        // Si la cookie existe, continuar con la solicitud
        return $next($request);
    }
}
