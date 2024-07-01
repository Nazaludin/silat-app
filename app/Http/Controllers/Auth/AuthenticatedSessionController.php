<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Perguruan;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        $perguruan = Perguruan::where('id_user', Auth::id())->first(); // Sesuaikan dengan logika pengambilan informasi perguruan
        $request->session()->put('id_perguruan', $perguruan->id_perguruan);
        return redirect()->intended(RouteServiceProvider::getHome());
        // Simpan informasi perguruan ke dalam session

        // $user = auth()->user();

        // // Periksa status pengguna
        // if ($user->access_status === 'banned') {
        //     auth()->logout(); // Logout pengguna jika statusnya banned
        //     return redirect()->route('login')->with('status_error', 'Your account is banned.');
        // } elseif ($user->access_status === 'inactive') {
        //     auth()->logout(); // Logout pengguna jika statusnya inactive
        //     return redirect()->back()->with('status_error', 'Your account is inactive.');
        // }

        // if ($user) {
        //     if ($user->hasRole('admin')) {
        //         $route = 'admin.dashboard';
        //     } else {
        //         $route = 'adminpg.dashboard';
        //     }
        // } else {
        //     abort(403, 'Unauthorized action.');
        // }
        // return redirect()->route($route);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {

        $request->session()->forget('id_perguruan');

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
