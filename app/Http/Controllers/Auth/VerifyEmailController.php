<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(EmailVerificationRequest $request, $id, $hash): RedirectResponse
    {
        // $user = User::findOrFail($request->route('id'));
        // // Auth::login($user);

        // dd($user->hasVerifiedEmail(), $user->markEmailAsVerified());
        // if ($user->hasVerifiedEmail()) {
        //     // return redirect()->intended(RouteServiceProvider::getHome() . '?verified=1');
        //     return redirect()->route('wait.accept');
        // }

        // if ($user->markEmailAsVerified()) {
        //     event(new Verified($user));
        //     $request->user()->update(['email_verified' => 1]);
        // }
        // return redirect()->route('wait.accept');
        if ($request->user()->hasVerifiedEmail()) {
            // return redirect()->intended(RouteServiceProvider::getHome() . '?verified=1');
            Auth::logout($request->user());
            return redirect()->route('wait.accept');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
            $request->user()->update(['email_verified' => 1]);
        }

        Auth::logout($request->user());
        return redirect()->route('wait.accept');

        // return redirect()->intended(RouteServiceProvider::getHome() . '?verified=1');
    }
}
