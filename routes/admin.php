<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;



Route::name('admin.')->prefix('admin')->group(function () {

    // Login Routes
    Route::get('', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');


    // Password Reset Routes
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');


    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');




    Route::group(['middleware' => ['passwords']], function () {

        Route::get('/subscription', '\App\Http\Controllers\SubscribeController@list')->name('subscription.list');
        Route::delete('/subscription/{subscription}', '\App\Http\Controllers\SubscribeController@destroy')->name('subscription.destroy');

        Route::get('/config', '\App\Http\Controllers\ConfigController@edit')->name('config.edit');
        Route::put('/config', '\App\Http\Controllers\ConfigController@update')->name('config.update');


        Route::get('/about', '\App\Http\Controllers\AboutController@index')->name('about.index');
        Route::get('/about/create', '\App\Http\Controllers\AboutController@create')->name('about.create');
        Route::post('/about', '\App\Http\Controllers\AboutController@store')->name('about.store');
        Route::get('/about/{about}/edit', '\App\Http\Controllers\AboutController@edit')->name('about.edit');
        Route::get('/about/{about}', '\App\Http\Controllers\AboutController@show')->name('about.show');
        Route::put('/about/{about}', '\App\Http\Controllers\AboutController@update')->name('about.update');
        Route::delete('/about/{about}', '\App\Http\Controllers\AboutController@destroy')->name('about.destroy');


        Route::get('/products', '\App\Http\Controllers\ProductsController@index')->name('products.index');
        Route::get('/products/create', '\App\Http\Controllers\ProductsController@create')->name('products.create');
        Route::post('/products', '\App\Http\Controllers\ProductsController@store')->name('products.store');
        Route::get('/products/{product}/edit', '\App\Http\Controllers\ProductsController@edit')->name('products.edit');
        Route::get('/products/{product}', '\App\Http\Controllers\ProductsController@show')->name('products.show');
        Route::put('/products/{product}', '\App\Http\Controllers\ProductsController@update')->name('products.update');
        Route::delete('/products/{product}', '\App\Http\Controllers\ProductsController@destroy')->name('products.destroy');


        Route::get('/slides', '\App\Http\Controllers\SlidesController@index')->name('slides.index');
        Route::get('/slides/create', '\App\Http\Controllers\SlidesController@create')->name('slides.create');
        Route::post('/slides', '\App\Http\Controllers\SlidesController@store')->name('slides.store');
        Route::get('/slides/{slide}/edit', '\App\Http\Controllers\SlidesController@edit')->name('slides.edit');
        Route::get('/slides/{slide}', '\App\Http\Controllers\SlidesController@show')->name('slides.show');
        Route::put('/slides/{slide}', '\App\Http\Controllers\SlidesController@update')->name('slides.update');
        Route::delete('/slides/{slide}', '\App\Http\Controllers\SlidesController@destroy')->name('slides.destroy');


        Route::get('/blogs', '\App\Http\Controllers\BlogController@index')->name('blogs.index');
        Route::get('/blogs/create', '\App\Http\Controllers\BlogController@create')->name('blogs.create');
        Route::post('/blogs', '\App\Http\Controllers\BlogController@store')->name('blogs.store');
        Route::get('/blogs/{blog}/edit', '\App\Http\Controllers\BlogController@edit')->name('blogs.edit');
        Route::get('/blogs/{blog}', '\App\Http\Controllers\BlogController@show')->name('blogs.show');
        Route::put('/blogs/{blog}', '\App\Http\Controllers\BlogController@update')->name('blogs.update');
        Route::delete('/blogs/{blog}', '\App\Http\Controllers\BlogController@destroy')->name('blogs.destroy');
    });

});
