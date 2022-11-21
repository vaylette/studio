<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
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
    return view('index');
});

Route::get('/video', function () {
    return view('index-video');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/works', function () {
    return view('gallery');
});

Route::get('/album', function () {
    return view('gallery1');
});

Route::get('/album2', function () {
    return view('gallery2');
});

Route::get('/album3', function () {
    return view('gallery3');
});

Route::get('/details', function () {
    return view('service-details');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/audio', function () {
    return view('audio');
});

Route::get('/photo-details', function () {
    return view('/photo-details');
});

Route::get('/video-details', function () {
    return view('video-details');
});

Route::get('/film-details', function () {
    return view('film-details');
});

Route::get('/content-details', function () {
    return view('content-details');
});

Route::get('/animation-details', function () {
    return view('animation-details');
});

Route::post('/uploadVideo', 'VideoController@uploadVideo', 
)->name('videos.uploadedVideo');

Route::post('/contact-us', [ContactController::class,'save'] 
)->name('contact-us');
