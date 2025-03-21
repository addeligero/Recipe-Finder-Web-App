<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthRestrictController;

class AuthRestrictController extends Controller
{
    public function handle()
    {
        if (auth()->check()) {
            return redirect()->route('hero');
        }

        return view('welcome');
    }
}
