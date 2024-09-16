<?php

namespace App\Http\Controllers\HR\Auth;

use App\Http\Controllers\Controller;
use App\Models\nhatuyendungs;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('HR.auth.register');
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.nhatuyendungs::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'SDT' => ['required','string','max:11']
        ]);

        $nhastuyendungs = nhatuyendungs::create([
            'name' => $request->name,
            'email' => $request->email,
            'SDT' => $request->SDT,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($nhastuyendungs));

        Auth::guard('HR')->login($nhastuyendungs);

        return redirect(route('HR.index', absolute: false));
    }
}
