<?php

namespace App\Http\Middleware;

use App\Models\Perguruan;
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
                $user = Auth::guard($guard)->user();
                // Periksa status pengguna
                if ($user->access_status === 'banned') {
                    Auth::guard($guard)->logout(); // Logout pengguna jika statusnya banned
                    return redirect()->route('login')->with('status_error', 'Your account is banned.');
                } elseif ($user->access_status === 'inactive') {
                    Auth::guard($guard)->logout(); // Logout pengguna jika statusnya inactive
                    return redirect()->route('login')->with('status_error', 'Your account is inactive.');
                }

                // Simpan informasi perguruan ke dalam session
                $perguruan = Perguruan::where('id_user', $user->id)->first();
                $request->session()->put('id_perguruan', $perguruan->id_perguruan);
                return redirect(RouteServiceProvider::getHome());
            }
        }

        return $next($request);
    }
}
