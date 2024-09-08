<?php

use App\Http\Controllers\AdminController;
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
    ->name('home');

Route::get('/login', function () {
    return view('user.login');
});

Route::post('/add-employee', );

Route::controller(AdminController::class)->group(function () {

    Route::post('/add-employee', 'addEmployee');

});
