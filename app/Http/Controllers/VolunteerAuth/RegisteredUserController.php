<?php

namespace App\Http\Controllers\VolunteerAuth;

use App\Http\Controllers\Controller;
use App\Models\Donor;
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
        return view('volunteer.auth.register');
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
            'DonorName' => ['required', 'string', 'max:255'],
            'DonorEmail' => ['required', 'string', 'email', 'max:255', 'unique:volunteers'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'DonorIC' => ['required', 'string', 'max:255'],
            'DonorContact' => ['required', 'string', 'max:255'],
            'DonorAddress' => ['required', 'string', 'max:255'],
            'DonorPostcode' => ['required', 'string', 'max:255'],
            'DonorState' => ['required', 'string', 'max:255'],

        ]);

        $user = Donor::create([
            'DonorName' => $request->DonorName,
            'DonorEmail' => $request->DonorEmail,
            'password' => Hash::make($request->password),
            'DonorIC' => $request->DonorIC,
            'DonorContact' => $request->DonorContact,
            'DonorAddress' => $request->DonorAddress,
            'DonorPostcode' => $request->DonorPostcode,
            'DonorState' => $request->DonorState,
        ]);

        event(new Registered($user));

        Auth::guard('volunteer')->login($user);

        return redirect(RouteServiceProvider::VOLUNTEER_HOME);
    }
}
