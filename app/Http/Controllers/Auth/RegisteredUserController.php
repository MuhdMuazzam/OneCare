<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Local;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('locals.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'LocalsEmail' => ['required', 'string', 'email', 'max:255', 'unique:locals'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'LocalsName' => ['required', 'string', 'max:255'],
            'LocalsIC' => ['required', 'string', 'max:255'],
            'LocalsContact' => ['required', 'string', 'max:255'],
            'LocalsAddress' => ['required', 'string', 'max:255'],
            'LocalsPostcode' => ['required', 'string', 'max:255'],
            'LocalsState' => ['required', 'string', 'max:255'],

    

        ]);

        $user = Local::create([
            'LocalsName' => $request->LocalsName,
            'LocalsEmail' => $request->LocalsEmail,
            'password' => Hash::make($request->password),
            'LocalsIC' => $request->LocalsIC,
            'LocalsContact' => $request->LocalsContact,
            'LocalsAddress' => $request->LocalsAddress,
            'LocalsPostcode' => $request->LocalsPostcode,
            'LocalsState' => $request->LocalsState,

        ]);

        event(new Registered($user));

        Auth::guard('local')->login($user);

        return redirect(RouteServiceProvider::LOCAL_HOME);
    }
}
