<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    // public function index()
    // {
    //     return view('home');
    // }
    public function clientHome()
    {
        return view('home',["msg"=>"Hello! I am client"]);
    }
    public function trainerHome()
    {
        return view('home',["msg"=>"Hello! I am trainer"]);
    }
    public function receptionistHome()
    {
        return view('home',["msg"=>"Hello! I am receptionist"]);
    }
    public function adminHome()
    {
        return view('home',["msg"=>"Hello! I am admin"]);
    }
}
