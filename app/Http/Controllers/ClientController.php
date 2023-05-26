<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
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
    public function createAppointment(){
        $trainers = DB::select('select * from users where role = 1');
        return view('clientPanel.make-appointment', compact('trainers'));
    }
    public function store(Request $request)
    {
        $trainerId = $request->trainersId;
        $dent = User::where('name', $trainerId)->first()->id;
        
        $pat = auth()->user()->id;
        $time = join("",$request->time);
        $date = $request->date;
        Booking::create([
            'user_id' => $pat,
            'trainer_id' => $dent,
            'time' => $time,
            'date' => $date,
            'status' => 0
        ]);
        return view('index') ;
    }
    public function showAppointment(){
        $pat = auth()->user()->id;
        $appointments = DB::select("select * from bookings where user_id = $pat");
        $arr = array_column($appointments, 'trainer_id');
        $d = [];
        foreach($arr as $a){
            $trainer = DB::select("SELECT users.id,users.name,users.surname from users inner join bookings on users.id=bookings.trainer_id and trainer_id = $a;");
         
            array_push($d,$trainer);
        }
        $data = collect($d);
        $flattened = $data->flatten()->toArray();
        return view('clientPanel.showAppointment', compact('appointments','flattened'));

    }
    public function edit($id)
    {
        $appointment = Booking::find($id);
        return view('clientPanel.edit-appointment', compact('appointment'));
    }
    public function update(Request $request,$id)
    {
        $data = $request->except('_method', '_token');
        $appointment = Booking::find($id);
        $appointment->update($data);
        
        return redirect()->route('clientPanel.myAppointment')->with('message', 'trainer ' . $appointment->id . ' information updated successfully');
    }
    public function messanger(){
        // return view('vendor.chatify.pages.app');
        return redirect()->route('chatify');
    }
}
