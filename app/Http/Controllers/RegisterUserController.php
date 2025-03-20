<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
  

    public function store()
    {
        $validated=  request()->validate([
               'first_name' => 'required',
               'last_name' => 'required',
               'email' => 'required|email|unique:users,email',
               'password' => 'required|confirmed',Password::min(5)->letters()->numbers()->mixedCase()->symbols(),
           ]);
        $user=User::create($validated);
        Auth::login($user);
        return redirect('/hero');

        
    }
}
