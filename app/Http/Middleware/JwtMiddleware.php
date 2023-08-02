<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;

class JwtMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {
            if ($e instanceof TokenInvalidException){
                return response()
                        ->json(['status' => 'Token is Invalid']);
            } else if ($e instanceof TokenExpiredException){
                return response()
                        ->json(['status' => 'Token is Expired']);
            }
            return response()
            ->json(['status' => 'Authorization Token not found']);
        }
        return $next($request);
    }
}