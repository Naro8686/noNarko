<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/abc', 'HomeController@abc')->name('abc');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/news', 'HomeController@news')->name('news');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/cases', 'HomeController@cases')->name('cases');
Route::get('/prices', 'HomeController@prices')->name('prices');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/requests', 'HomeController@requests')->name('requests');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/write-to-doctor', 'HomeController@writeToDoctor')->name('writeToDoctor');
Route::get('/treatment-program', 'HomeController@treatmentProgram')->name('treatmentProgram');

Auth::routes(['register' => false, 'verify' => true]);
