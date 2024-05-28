<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Perguruan;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 2,
            'password' => Hash::make($request->password),
        ]);
        $perguruan = Perguruan::create([
            'id_user' => $user->id,
        ]);
        session()->put('perguruan_id', $perguruan->id);


        // $emailVerificationController = new EmailVerificationNotificationController();
        // return $emailVerificationController->store($user);
        // event(new Registered($user));

        // $emailVerificationController = new EmailVerificationNotificationController();
        // return $emailVerificationController->store($user);

        // $user->sendEmailVerificationNotification();


        // Auth::login($user);
        return  redirect()->route('verification.notice', $user->id);
        // return redirect(RouteServiceProvider::getHome());
        // return view('auth.verify-email');
    }
}
