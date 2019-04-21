<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AccountController extends Controller
{
    /**
     * Show the account index.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return Auth::check() ? redirect("/account/dashboard") : redirect("/login");
    }

    /**
     * Show the account dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view("account.dashboard");
    }
}
