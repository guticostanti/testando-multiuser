<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Account;
use App\Transaction;
use App\Client;

class PfController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:pf');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('pf-home', compact('request'));


        /*$user = Auth::user();
        $transactions = Transaction::where('user_id',$user->id)->take(5)->get();
        $acc_balance = Account::where('user_id',$user->id)->first();
        return view('home', compact('request', 'user', 'transactions', 'acc_balance'));*/
    }
}
