<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function redirect()
    {
     
        if (Auth::check() && Auth::user()->role == 1 ) {
            return view('admins.admins');
        } else if (Auth::check() && Auth::user()->role == 0) {
            return view('home');
        } else { 
            return redirect('/');  
        }

    }


}
