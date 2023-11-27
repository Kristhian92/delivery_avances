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
    return view('welcome');
    // return 'pagina principal';

})->name('welcome');;

Route::get('/medical', function () {
    return view('medical');
})->name('medical');

Route::get('/newmedical', function () {
    return view('newmedical');
})->name('newmedical');

Route::get('/configuration', function () {
    return view('configuration');
})->name('configuration');

Route::get('/configurationpatient', function () {
    return view('configurationpatient');
})->name('configurationpatient');




Route::get('profesional', function () {
    return 'pagina profesional';
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient', [App\Http\Controllers\PatientController::class, 'index'])->name('patient');

