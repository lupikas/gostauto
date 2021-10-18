<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\DB;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'localize' ]
], function() {
    
    Route::get('/', ['App\Http\Controllers\IndexController', 'index']);
  

    Route::get(LaravelLocalization::transRoute('routes.doctors'), ['App\Http\Controllers\DoctorController', 'index'])->name('doctors');
    Route::get(LaravelLocalization::transRoute('routes.doctor'), ['App\Http\Controllers\DoctorController', 'show'])->name('doctor');

    Route::get(LaravelLocalization::transRoute('routes.procedures'), ['App\Http\Controllers\ProcedureController', 'index'])->name('procedures');
    Route::get(LaravelLocalization::transRoute('routes.procedure'), ['App\Http\Controllers\ProcedureController', 'show'])->name('procedure');

    Route::get(LaravelLocalization::transRoute('routes.posts'), ['App\Http\Controllers\PostController', 'index'])->name('posts');
    Route::get(LaravelLocalization::transRoute('routes.post'), ['App\Http\Controllers\PostController', 'show'])->name('post');

    Route::get(LaravelLocalization::transRoute('routes.feedback'), ['App\Http\Controllers\FeebackController', 'index'])->name('feedback');

    Route::get(LaravelLocalization::transRoute('routes.prices'), ['App\Http\Controllers\PriceController', 'index'])->name('prices');

    Route::get(LaravelLocalization::transRoute('routes.register'), ['App\Http\Controllers\RegisterController', 'show'])->name('register');

    Route::get(LaravelLocalization::transRoute('routes.pages.contacts'), ['\App\Http\Controllers\PageController', 'showContacts'])->name('contacts');
    /*Route::get(LaravelLocalization::transRoute('routes.pages.privacy-policy'), ['\App\Http\Controllers\PageController', 'showPrivacyPolicy'])->name('privacy-policy');*/
    
    Route::get('{slug}/{param?}', '\Remipou\NovaPageManager\PageController@page')
	->where('slug', '^((?!' . trim(config('nova.path'), '/') . '|nova-).)*$')
	->name('page-manager');
});
