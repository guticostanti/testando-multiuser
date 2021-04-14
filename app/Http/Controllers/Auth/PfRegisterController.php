<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Providers\RouteServiceProvider;
use App\Pf;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Account;

class PfRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:pf');
    }

    public function showRegistrationForm()
    {
        return view('auth.pf-register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'name' => ['required', 'string', 'max:255'],
                'cpf_cnpj' => ['required', 'string', 'max:14'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:pfs'],
                'password' => ['required', 'string', 'min:8']
            ]
        );

        // Create pf user
        try {
            $admin = Pf::create([
                'name' => $request->name,
                'cpf_cnpj' => $request->cpf_cnpj,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            // Log the pf in
            Auth::guard('pf')->loginUsingId($admin->id);
            return redirect()->route('pf.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->only('name', 'email'));
        }
    }
}
