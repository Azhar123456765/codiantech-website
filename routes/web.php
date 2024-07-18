<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', function () {
    return view('index');
});
Route::get('/down-service', function () {
    return response()->download(public_path('assets/' . 'Codiantech Service.docx'));
});
Route::get('/down-features', function () {
    return response()->download(public_path('assets/' . 'Codiantech Features.docx'));
});
Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    $page = App\Page::where('page_name', 'about-us')->firstOrFail();
    return view('about', compact('page'));
});

Route::get('/contact', function () {
    $page = App\Page::where('page_name', 'contact')->firstOrFail();
    return view('contact', compact('page'));
});
Route::get('/our-partners', function () {
    $page = App\Page::where('page_name', 'our-partners')->firstOrFail();
    return view('our_partners', compact('page'));
});
// SERVICES 
Route::get('/services', function () {
    return view('services.services');
});
Route::get('/services/DevOps', function () {
    return view('services.DevOps');
});

Route::get('/services/cyber-security', function () {
    return view('services.Cyber Security ');
});
Route::get('/services/UI-UX', function () {
    return view('services.Graphic');
});
Route::get('/services/video-editing', function () {
    return view('services.Video editing and animation');
});
Route::get('/services/web-development', function () {
    return view('services.Web development and custom software');
});
Route::get('/services/mobile-app', function () {
    return view('services.Mobile App');
});

