<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        if ($user->hasVerifiedEmail()) {
            // return redirect()->intended(RouteServiceProvider::getHome());
            return  redirect()->route('wait.accept');
        }

        $user->sendEmailVerificationNotification();

        // if ($request->user()->hasVerifiedEmail()) {
        //     // return redirect()->intended(RouteServiceProvider::getHome());
        //     return  redirect()->route('wait.accept');
        // }

        // $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
