<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Time;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function store(Request $request)
    {        
       // dd($request);
	$trainerId = $request->trainerId;
    $train = User::where('name', $trainerId)->first()->id;
        
    $clientId = $request->clientId; 
    $pat = User::where('name', $clientId)->first()->id;
    $time = join("",$request->time);
    $appointmentId = $request->appointmentId;
    $date = $request->date;
    Booking::create([
        'user_id' => $pat,
        'trainer_id' => $train,
        'time' => $time,
        'date' => $date,
        //'status' => 0
    ]);
    Time::where('appointment_id', $appointmentId)->where('time', $time)->update(['status' => 1]);
    return view('index') ;
}
public function checkBookingTimeInterval()
{
    return Booking::orderby('id', 'desc')
        ->where('user_id', auth()->user()->id)
        ->whereDate('created_at', date('y-m-d'))
        ->exists();
}
}
