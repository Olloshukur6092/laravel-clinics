<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_create()
    {
        if (session()->get('admin')) {
            return redirect()->route('dashboard');
        }
        
        return view('login');
    }

    public function login(Request $request)
    {
        $admin = Admins::query()->where('login', '=', $request->login, 'and', 'password', '=', $request->password)->first();
        if ($admin !== null) {
            $request->session()->put('admin', $admin);
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('error', 'This is admin not found!');
    }

    // public function register(Request $request)
    // {
    //     //
    // }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('login_create');
    }

    public function rules()
    {
        return [
            'clinic_name' => 'required|unique:admins',
            'login' => 'required|unique:admins',
            'password' => 'required',
        ];
    }
}
