<?php

namespace App\Services;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthenticationService
{
    public function logoutAndInvalidateSession(): RedirectResponse
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();


        return redirect()->route('home');
    }
}
