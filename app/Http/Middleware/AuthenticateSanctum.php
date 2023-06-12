<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;

class AuthenticateSanctum
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (! $request->hasHeader('Authorization')) {
            return response()->json(['message' => 'Token not available'], 401);
        }
    
         $token = $request->bearerToken();

        
        if (empty($token)) {
            return response()->json(['message' => 'Token not available'], 401);
        }
        $accessToken = PersonalAccessToken::findToken($token);

        if (! $accessToken) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        
        $user = $accessToken->tokenable;
    
        if (! Auth::guard('sanctum')->check()) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        $request->merge(['user' => $user]);

        return $next($request);
    }
}
