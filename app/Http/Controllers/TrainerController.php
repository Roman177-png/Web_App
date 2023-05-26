<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainerController extends Controller
{
    public function trainerHome()
    {
        $trainID = auth()->user()->id;
        $trainer = DB::select("select * from users where id = $trainID");
        return view('trainerPanel.home',compact('trainer'));
    }
    public function index()
    {
        $pat = auth()->user()->id;
        $appointments = DB::select("select * from bookings where trainer_id = $pat");
        $arr = array_column($appointments, 'user_id');
        
        $d = [];
        foreach($arr as $a){
            $client = DB::select("SELECT users.id,users.name,users.surname, users.description from users inner join bookings on users.id=bookings.user_id and user_id = $a;");
            array_push($d,$client);
        }
        $data = collect($d);
        $flattened = $data->flatten()->toArray();
        return view('trainerPanel.show', compact('appointments','flattened'));
    }
    public function messanger(){
        // return view('vendor.chatify.pages.app');
        return redirect()->route('chatify');
    }
}
