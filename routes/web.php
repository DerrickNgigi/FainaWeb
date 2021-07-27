<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('home');
});
Route::get('/Welcome-to-Faina-for-the-best-3D-Printing-PCD-Design-and-Product-Design', function () {
    return view('home');
})->name('home');
Route::get('/Faina-Youth-lead-Tech-Company', function () {
    return view('about');
})->name('about');
Route::get('/Faina-Kenya-company-innovating-around-the-agriculture-and-tech-space', function () {
    return view('innovations');
})->name('innovations');
Route::get('/Faina-We-listen-then-and-find-an-innovative-solution', function () {
    return view('contact');
})->name('contact-us');

