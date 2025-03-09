<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function hero()
    {
        return view('dashboard.hero');
    }
}
