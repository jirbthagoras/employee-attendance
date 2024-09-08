<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
    return view('user.home', ['user' => 'Jirb']);
})
    ->name('home')->middleware(['onlyUser']);

Route::get('/attend', function () {
    return view('user.login');
})
->name('attend')->middleware(['onlyGuest']);;

Route::controller(UserController::class)->group(function () {

    Route::post('/attend', 'attend')
    ->middleware(['onlyGuest']);
    Route::post('/logout', 'logout');

});

Route::controller(AdminController::class)->group(function () {

    Route::post('/add-employee', 'addEmployee');

});
