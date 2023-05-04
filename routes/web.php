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
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth','user-role:client'])->group(function()
{
    Route::get("/home",[App\Http\Controllers\HomeController::class, 'clientHome'])->name("home");
});
// Route Trainer
Route::middleware(['auth','user-role:trainer'])->group(function()
{
    Route::get("/trainer/home",[App\Http\Controllers\HomeController::class, 'trainerHome'])->name("trainer.home");
});
//Route Receptionist
Route::middleware(['auth','user-role:receptionist'])->group(function()
{
    Route::get("/receptionist/home",[App\Http\Controllers\HomeController::class, 'receptionistHome'])->name("receptionist.home");
});
// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[App\Http\Controllers\HomeController::class, 'adminHome'])->name("admin.home");
});
