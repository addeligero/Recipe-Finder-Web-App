<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
             'email' => 'required|email',
             'password' => 'required'
         ]);
        if (!Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.'
]);
        }
        request()->session()->regenerate();
        return redirect('/hero');

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
    public function logUser()
    {
        return view('Auth.login');
    }
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
