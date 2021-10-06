<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScholarshipRegistrationController;

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
Route::get('/Faina-Kenya-company-innovating-around-the-agriculture-and-edu-tech-space', function () {
    return view('innovations');
})->name('innovations');
Route::get('/Faina-We-listen-then-and-find-an-innovative-solution', function () {
    return view('contact');
})->name('contact-us');

Route::get('/shambaAssistant', function () {
    return view('home');
})->name('fainaAgriculture');

Route::get('/p4cda_e-learning_scholarship', function () {
    return view('e-learning_scholarship_registration');
})->name('p4cda_e-learning_scholarship');

Route::get('/p4cda_e-learning_scholarship', [ScholarshipRegistrationController::class, 'create'])->name('p4cda_e-learning_scholarship');
Route::post('/p4cda_e-learning_scholarship', [ScholarshipRegistrationController::class, 'store']) ->name('p4cda_e-learning_scholarship_submit');
Route::get('/p4cda_e-learning_scholarship_success', [ScholarshipRegistrationController::class, 'redirectCheck']) ->name('p4cda_e-learning_scholarship_success');

//Route::get('/p4cda_e-learning_scholarship_success', function () {
//    return view('scholarship_response');
//})->name('p4cda_e-learning_scholarship_success');

//Route::post('/p4cda_e-learning_scholarship', function () {
//    return view('e-learning_scholarship_registration');
//})->name('fainaAgriculture');
