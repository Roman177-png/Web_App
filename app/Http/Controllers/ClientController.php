<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function clientHome()
    {
        $patID = auth()->user()->id;
        $client = DB::select("select * from users where id = $patID");
        return view('clientPanel.home',compact('client'));
    }
}
