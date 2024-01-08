<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get("/",[HomeController::class,"index"]);

Route::get("/about",function(){
    return view('pages.about');
});

Route::get("/buyer",function(){
    return view('pages.buyer');
});

Route::get("/seller",function(){
    return view('pages.seller');
});

Route::get("/cycle",function(){
    return view('pages.cycle');
});

Route::get("/news",function(){
    return view('pages.news');
});

Route::get("/contact",function(){
    return view('pages.contact');
});

Route::get("/home",function(){
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

