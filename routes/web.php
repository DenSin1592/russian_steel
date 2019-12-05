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

Route::group(['namespace' => "Site"], function (){
    Route::get('/', 'PageController@show_home_page')->name('site/home');
    Route::get('/services', 'PageController@show_services_page')->name('site/about');
    Route::get('/contacts', 'PageController@show_contacts_page')->name('site/contacts');
    Route::get('/production/{category_id?}', 'PageController@show_production_page')
        ->name('site/production')->where('category_id', '[0-9]+');
    /*Route::get('/news', 'PageController@show_news_page')->name('site/news');*/
});
Auth::routes(App\Http\Controllers\Auth\CheckRegisterController::close_register());



Route::get('auth/home', 'Auth\HomeController@index')->name('auth/home');

Route::group(['prefix' => 'admin', 'namespace' => "AdminPanel"] , function(){
    Route::get('/home', 'HomeController@index')->name('admin/home');
    Route::resource('categories', 'CategoryController')->except(['show','destroy'])->names('admin/categories');
    Route::resource('productions', 'ProductionController')->except('show')->names('admin/productions');
});
