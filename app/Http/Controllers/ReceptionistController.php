<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptionistController extends Controller
{
    public function receptionistHome()
    {
        $recID = auth()->user()->id;
        $receptionist = DB::select("select * from users where id = $recID");
        return view('receptionistPanel.home',compact('receptionist'));
    }
    public function createClient(){
        return view('receptionistPanel.create-client');
    }
    public function create(){
        return view('receptionistPanel.create-trainer');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $name = (new User)->userAvatar($request);
        $data['image'] = $name;
   
        $data['password'] = bcrypt($request->password);
        
        User::create($data);

        return redirect()->route('receptionistPanel.home')->with('message', 'Trainer added successfully');
    }
    public function createAppointment(){
        $trainers = DB::select('select * from users where role = 1');
        $clients = DB::select('select * from users where role = 0');
        return view('receptionistPanel.make-appointment', compact('trainers','clients'));
    }
    public function editApp(){
        $bookings = DB::select('select * from bookings');
        return view('receptionistPanel.edit-appoint',compact('bookings'));
    }
}
