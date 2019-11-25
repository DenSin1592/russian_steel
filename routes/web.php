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

Route::group(['namespace' => "Site"], function (){
    Route::get('/', 'PageController@show_home_page')->name('site/home');
    Route::get('/services', 'PageController@show_services_page')->name('site/about');
    Route::get('/contacts', 'PageController@show_contacts_page')->name('site/contacts');
    Route::get('/production/{category_id?}', 'PageController@show_production_page')
        ->name('site/production')->where('category_id', '[0-9]+');
//    Route::get('/news', 'PageController@show_news_page')->name('site/news');
});

