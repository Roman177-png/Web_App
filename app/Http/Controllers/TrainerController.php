<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    //
    public function trainerHome()
    {
        $trainID = auth()->user()->id;
        $trainer = DB::select("select * from users where id = $trainID");
        return view('trainerPanel.home',compact('trainer'));
    }
}
