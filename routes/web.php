<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSite\IndexController;
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

Route::controller(IndexController::class)
->as('website.')
->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/nosotros', 'aboutUs')->name('about-us');
    Route::get('/servicios', 'services')->name('services');
    Route::get('/inspirate', 'inspirate')->name('inspirate');
    Route::get('/ceo', 'ceo')->name('ceo');
    Route::get('/contacto', 'contact')->name('contact');
    Route::post('schedule-meeting', 'scheduleMeeting')->name('schedule-meeting');
});
