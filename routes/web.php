<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;



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

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});

Route::get('/services', function () {
    return view('services', [
        "title" => "Services"
    ]);
});

Route::get('/our-team', function () {
    return view('team', [
        "title" => "Our Team"
    ]);
});

Route::get('/contact-us', function () {
    return view('contact', [
        "title" => "Contact Us"
    ]);
});

Route::post('contact-form', [MailController::class, 'mail']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog-post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]); 
});
