<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/contact-us', function () {
    return view('contact', [
        "title" => "Contact Us"
    ]);
});

Route::get('/services', function () {
    return view('services', [
        "title" => "Services"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});

Route::post('contact-form', [MailController::class, 'mail']);

