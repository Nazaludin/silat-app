<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request, $id): RedirectResponse|View
    {
        // dd($id);
        $user = User::findOrFail($id);
        Auth::login($user);
        $user_id = $id;
        return $user->hasVerifiedEmail()
            ? redirect()->route('wait.accept')
            : view('auth.verify-email', compact('user_id'));
        // return $request->user()->hasVerifiedEmail()
        //     ? redirect()->route('wait.accept')
        //     : view('auth.verify-email');
        // ? redirect()->intended(RouteServiceProvider::getHome())
    }
}
