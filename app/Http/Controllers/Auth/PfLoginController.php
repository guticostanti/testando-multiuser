<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PfLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:pf')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.pf-login');
    }

    public function login(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'email' => 'required|string|email',
                'password' => 'required|string|min:8'
            ]
        );

        // Attempt to login as pf
        if (Auth::guard('pf')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // If successful then redirect to intended route or pf dashboard
            return redirect()->route('pf.dashboard');
        }

        // If unsuccessful then redirect back to login page with email and remember fields
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)
    {
        Auth::guard('pf')->logout();
        return redirect('/');
    }
}
