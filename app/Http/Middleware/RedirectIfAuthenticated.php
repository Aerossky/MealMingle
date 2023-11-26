<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();
                //redirect based on role
                if ($user->role_id == 1) {
                    return redirect()->to('/admin-dashboard');
                } elseif ($user->role_id == 2) {
                    return redirect()->to('/tenant-dashboard');
                } elseif ($user->role_id == 3) {
                    return redirect()->to('/');
                }
            }
        }
        return $next($request);
    }
}
