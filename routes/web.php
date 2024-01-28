<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);;

Route::post('/appointment', [HomeController::class, 'appointment']);;

Route::get('/add-doctor', [AdminController::class, 'add_view']);
Route::post('/uptload-docor', [AdminController::class, 'upload']);
Route::get('/out', function () {
    return view('out');
});

Route::get('/my-appointment', [HomeController::class, 'my_appointment'])->middleware('auth');
Route::get('/cancel-appointment/{id}', [HomeController::class, 'cancel_appointment'])->middleware('auth');

Route::get('/show-appointment', [AdminController::class, 'show_appointment'])->middleware('auth');


Route::get('/approve-appointment/{id}', [AdminController::class, 'approve_appointment'])->middleware('auth');
Route::get('/cancel-appointment/{id}', [AdminController::class, 'cancel_appointment'])->middleware('auth');

Route::get('/show-doctor', [AdminController::class, 'show_doctor'])->middleware('auth');

Route::get('/update-doctor/{id}', [AdminController::class, 'update_doctor'])->middleware('auth');

Route::get('/delete-doctor/{id}', [AdminController::class, 'delete_doctor'])->middleware('auth');

Route::post('/edit-doctor/{id}', [AdminController::class, 'edit_doctor'])->middleware('auth');


Route::get('/home', [HomeController::class, 'redirect'])->name('home')->middleware('auth');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


});
