<?php

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

/*Route::get('/', function () {
    return view('russian_steel_site.home.home');
});*/



Route::get('/', function () {
    return view('website.home.home');
})->name('site/home');

Route::get('/about', function () {
    return view('website.about.about');
})->name('site/about');

Route::get('/contacts', function () {
    return view('website.contacts.contact');
})->name('site/contacts');

Route::get('/price', function () {
    return view('website.home.home');
})->name('site/prise');

//Route::get('/news', function () {
//    return view('website.home.home');
//})->name('site/news');

