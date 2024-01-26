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

Route::get('/my-appointment', [HomeController::class, 'my_appointment']);
Route::get('/cancel-appointment/{id}', [HomeController::class, 'cancel_appointment']);

Route::get('/show-appointment', [AdminController::class, 'show_appointment']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'redirect'])->name('home');

});
