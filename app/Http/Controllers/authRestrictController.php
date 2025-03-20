<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthRestrictController extends Controller
{
    public function handle()
    {
        if (auth()->check()) {
            return redirect()->route('hero');
            return redirect()->route('login');
        }
    }
}
