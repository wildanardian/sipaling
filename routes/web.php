<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuizController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master', function (){
    return view('pages.master');
});

Route::get('/landingpage', function (){
    return view('pages.landingpage');
})->name('landingpage');

Route::controller(DashboardController::class)->group(function(){
    Route::get('/dashboard', 'index')->name('dashboard');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('/register', function(){
    return view('pages.register');
});

Route::controller(QuizController::class)->group(function(){
    Route::get('/quiz', 'index')->name('quiz');
    Route::get('/question-quiz', 'question')->name('question-quiz');
    Route::get('/result-quiz', 'result')->name('result-quiz');
});