<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (!session()->get('admin')) {
            return redirect()->route('login_create');
        }

        return view('dashboard');
    }
}
