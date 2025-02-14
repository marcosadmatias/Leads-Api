<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        if (!$token || $token !== 'Bearer ' . env('API_ACCESS_TOKEN')) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Não autorizado.'
                ],
                401
            );
        }

        return $next($request);
    }
}
