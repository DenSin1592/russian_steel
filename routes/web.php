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
    Route::get('/', 'PageController@showHomePage')->name('site/home');
    Route::get('/services', 'PageController@showServicesPage')->name('site/about');
    Route::get('/contacts', 'PageController@showContactsPage')->name('site/contacts');
    Route::get('/production/{category_id?}', 'PageController@showProductionPage')
        ->name('site/production')->where('category_id', '[0-9]+');
    /*Route::get('/news', 'PageController@showNewsPage')->name('site/news');*/
});

Route::get('auth/home', 'Auth\HomeController@index')->name('auth/home');

Route::group(['prefix' => 'admin', 'namespace' => "AdminPanel"] , function(){
    Route::get('/home', 'HomeController@index')->name('admin/home');
    Route::resource('categories', 'CategoryController')->except('show')->names('admin/categories');
    Route::resource('productions', 'ProductionController')->except('show')->names('admin/productions');
    Route::resource('images', 'ImageController')->except('show')->names('admin/images');
});

Auth::routes(App\Http\Controllers\Auth\CheckRegisterController::closeRegister());

Route::fallback('Site\PageController@show_home_page');
