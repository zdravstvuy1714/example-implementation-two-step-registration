<?php

use App\Http\Controllers\Auth\RegisterSecondStepController;
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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('register-step-2', [RegisterSecondStepController::class, 'show'])
        ->name('register.step2.index');

    Route::post('register-step2', [RegisterSecondStepController::class, 'store'])
        ->name('register.step2.store');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
