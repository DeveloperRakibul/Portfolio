<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactFormController;


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
//
//Route::get('/', function ( ) {
//    return view('Home');
//});


Route::get('/', [HomeController::class, 'index'])->name('index');

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

// Route::post('/contact','ContactFormController@store')->name('contact.store');
