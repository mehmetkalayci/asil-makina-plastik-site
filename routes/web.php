<?php

use App\Http\Controllers\MakineController;
use App\Http\Controllers\PlastikController;
use App\Http\Controllers\ProductsController;
use App\Models\Products;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::namespace('App\Http\Controllers')->name('makina.')->prefix('makina')->group(function () {

    Route::get('/', 'MakineController@anasayfa')->name('anasayfa');
    Route::get('/hakkimizda', 'MakineController@hakkimizda')->name('hakkimizda');
    Route::get('/urunler', 'MakineController@urunler')->name('urunler');
    Route::get('/urunler/{slug}', 'MakineController@urunler')->name('urunler.detay');
    Route::get('/blog', 'MakineController@blog')->name('blog');
    Route::get('/blog/{slug}', 'MakineController@blog')->name('blog.detay');
    Route::get('/iletisim', 'MakineController@iletisim')->name('iletisim');
    Route::post('/iletisim', 'MakineController@gonder')->name('iletisim.gonder');
});


Route::namespace('App\Http\Controllers')->name('plastik.')->prefix('plastik')->group(function () {
    Route::get('/', 'PlastikController@anasayfa')->name('anasayfa');

    Route::get('/hakkimizda', 'PlastikController@hakkimizda')->name('hakkimizda');
    Route::get('/urunler', 'PlastikController@urunler')->name('urunler');
    Route::get('/urunler/{slug}', 'PlastikController@urunler')->name('urunler.detay');

    Route::get('/blog', 'PlastikController@blog')->name('blog');
    Route::get('/blog/{slug}', 'PlastikController@blog')->name('blog.detay');
    Route::get('/iletisim', 'PlastikController@iletisim')->name('iletisim');
    Route::post('/iletisim', 'PlastikController@gonder')->name('iletisim.gonder');
});

Route::redirect('/', '/makina', 301);

Route::get('captcha', 'App\Http\Controllers\CaptchaController@captcha')->name('captcha');
Route::get('refresh-captcha', 'App\Http\Controllers\CaptchaController@refreshCaptcha')->name('refresh.captcha');

Route::post('subscribe', 'App\Http\Controllers\SubscribeController@subscribe')->name('subscribe');


Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['tr', 'en', 'ar'])){
        Session::put('locale', $locale);
    }

    return redirect()->back();
})->name('language.switch');

require __DIR__ . '/admin.php';
