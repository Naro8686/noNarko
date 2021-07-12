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

Route::resource('/proposal', 'ProposalController')->only(['store']);
Route::resource('/feedback', 'FeedbackController')->only(['store']);
Route::get('/search', 'PagesController@search')->name('search');
Auth::routes(['register' => false, 'verify' => true]);
foreach (pages()->where('seo', '<>', null) as $page)
    Route::get("/{$page->seo->slug}", "HomeController@$page->name")->name($page->name);
Route::get('/{seo:slug}', 'PagesController@show')->where('seo', '^(?!admin).*$');
