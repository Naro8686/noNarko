<?php

use App\Models\Page;
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

Route::get('/', 'Admin\\HomeController@dashboard')->name('dashboard');
Route::resource('/slider', 'Admin\\SliderController');
Route::resource('/proposal','ProposalController')->only(['index','destroy']);
Route::resource('/feedback','FeedbackController')->only(['index','destroy']);
Route::resource('/seo', 'Admin\\SeoController')->only(['update']);
Route::post('/ckeditor/upload', 'Admin\\CKEditorController@upload')->name('ckeditor.image-upload');
Route::prefix('pages')->name('pages.')->group(function () {
    Route::put("/update/{id}", "Admin\\PagesController@update")->name('update');
    foreach (pages()->where('name', '<>', null) as $page) {
        Route::match(['GET', 'PUT'], "/$page->name", "Admin\\PagesController@$page->name")->name($page->name);
    }
});
Route::resource("/category", "Admin\\CategoryController");
Route::resource("/".Page::BLOG, "Admin\\PostsController");
Route::resource("/".Page::NEWS, "Admin\\PostsController");
Route::resource("/".Page::CASES, "Admin\\PostsController");
Route::resource("/".Page::FAQ, "Admin\\PostsController");
Route::resource("/".Page::REQUESTS, "Admin\\PostsController");
Route::resource("/".Page::SERVICES, "Admin\\PostsController");
Route::resource("/".Page::ABC, "Admin\\PostsController");
Route::resource("/".Page::ADVANTAGE, "Admin\\PostsController");
Route::resource("/".Page::WRITE_DOCTOR, "Admin\\PostsController");
Route::resource("/".Page::STEPS, "Admin\\PostsController");
