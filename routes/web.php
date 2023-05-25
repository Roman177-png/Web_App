<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get("/team",[App\Http\Controllers\HomeController::class,'team'])->name('team');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','user-role:client'])->group(function()
{
    Route::prefix('/client')->group(function(){  
        Route::resource('appointments', App\Http\Controllers\ClientController::class);
  
        Route::get("/home",[App\Http\Controllers\ClientController::class,'clientHome'])->name('clientPanel.home');
        Route::get('/appointment-create', [App\Http\Controllers\ClientController::class,'createAppointment'])->name('clientPanel.appointment_create');
        Route::get('/myAppointments', [App\Http\Controllers\ClientController::class,'showAppointment'])->name('clientPanel.myAppointment');
    });
    
});
// Route Trainer
Auth::routes();

Route::middleware(['auth','user-role:trainer'])->group(function()
{
    Route::prefix('/trainer')->group(function(){    
        Route::get("/home",[App\Http\Controllers\TrainerController::class,'trainerHome'])->name('trainerPanel.home');
        Route::get('/show', [App\Http\Controllers\TrainerController::class,'index'])->name('trainerPanel.show');

});
    
});

//Route Receptionist
Auth::routes();
Route::middleware(['auth','user-role:receptionist'])->group(function(){
    Route::prefix('/receptionist')->group(function(){
        Route::get("/home",[App\Http\Controllers\ReceptionistController::class,'receptionistHome'])->name('receptionistPanel.home');
        Route::resource('appointment', App\Http\Controllers\AppointmentController::class);

        Route::get('/client-create', [App\Http\Controllers\ReceptionistController::class,'createClient'])->name('receptionistPanel.client_create');
        Route::get('/trainer-create', [App\Http\Controllers\ReceptionistController::class,'create'])->name('receptionistPanel.create');
        Route::resource('receptionists', App\Http\Controllers\ReceptionistController::class);
        Route::get('/appointment-create', [App\Http\Controllers\ReceptionistController::class,'createAppointment'])->name('receptionistPanel.appointment_create');        
        Route::get("/edit-appointment",[App\Http\Controllers\ReceptionistController::class,'editApp'])->name('receptionistPanel.editApp'); 

    });
});     
//Route Admin
Auth::routes();
Route::middleware(['auth','user-role:admin'])->group(Function(){
    Route::prefix('admin')->group(function(){   
    Route::get("/home",[App\Http\Controllers\AdminController::class,'adminHome'])->name('adminPanel.home');
    Route::get("/show-receptionists",[App\Http\Controllers\AdminController::class,'showReceptionists'])->name('adminPanel.showReceptionists');
    Route::get("/show-trainer",[App\Http\Controllers\AdminController::class,'showTrainer'])->name('adminPanel.showTrainer');
    Route::resource('trainer', App\Http\Controllers\AdminController::class);
    Route::put("/update-client/{user}",[App\Http\Controllers\AdminController::class,'updateClient'])->name('adminPanel.updateClient');
    });
});
