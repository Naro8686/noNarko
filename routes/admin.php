<?php

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

Route::get('/', 'HomeController@dashboard')->name('dashboard');
Route::resource('/slider', 'SliderController');
Route::resource('/meta', 'MetaController')->only(['update']);

Route::prefix('pages')->name('pages.')->group(function () {
    Route::put( "/update/{id}", "PagesController@update")->name('update');
    foreach (pages() as $page) {
        Route::match(['GET', 'PUT'], "/$page->name", "PagesController@$page->name")->name($page->name);
    }
});

Route::post('/ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');
