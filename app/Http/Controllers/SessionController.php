<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store()
    {
        $validated = request()->validate([
             'email' => 'required|email',
             'password' => 'required'
         ]);
        if (Auth::attempt($validated)) {
            session()->regenerate();
            return redirect('/hero');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
    public function logUser()
    {
        return view('Auth.login');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
