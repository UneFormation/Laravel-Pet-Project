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

Route::get('/', function () {
    return redirect('/survey');
});
Route::get('/survey', [App\Http\Controllers\SurveyController::class, 'create']);
Route::post('/survey', [App\Http\Controllers\SurveyController::class, 'store']);
Route::prefix('admin')->group(function() {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth')->name('admin.dashboard');
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->middleware('guest')->name('admin.login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'authenticate'])->middleware('guest')->name('admin.authenticate');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')->name('admin.logout');

    Route::get('/survey/{survey}', [\App\Http\Controllers\AdminController::class, 'survey'])->middleware('auth')->name('admin.survey');

});
