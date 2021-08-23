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

Route::get('/', function () {
    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2,3}']
], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home')->middleware('setLocale');

    Route::get('/product', function () {
        return view('product');
    })->name('product')->middleware('setLocale');

    Route::get(
        '/industries',
        'App\Http\Controllers\IndustriesController@index'
    )->name('industries')->middleware('setLocale');

    Route::get(
        '/industries/{id}',
        'App\Http\Controllers\IndustriesController@show_one'
    )->name('industries_separate')->middleware('setLocale');

    Route::get('/aboutUs', function () {
        return view('aboutUs');
    })->name('aboutUs')->middleware('setLocale');

    Route::get('/technologies', function () {
        return view('technologies');
    })->name('technologies')->middleware('setLocale');

    Route::get(
        '/pressReleases',
        'App\Http\Controllers\PrreleaseController@index'
    )->name('pressReleases')->middleware('setLocale');

    Route::get(
        '/pressReleases/pr_release/{id}',
        'App\Http\Controllers\PrreleaseController@show_one'
    )->name('pr_separate')->middleware('setLocale');

    Route::get(
        '/pressReleases/our_latest_news/{id}',
        'App\Http\Controllers\PrreleaseController@show_one_latestNews'
    )->name('our_news_separate')->middleware('setLocale');

    Route::get(
        '/pressReleases/event/{id}',
        'App\Http\Controllers\PrreleaseController@show_one_event'
    )->name('event_separate')->middleware('setLocale');

    Route::get(
        '/pressReleases/media_about_us/{id}',
        'App\Http\Controllers\PrreleaseController@show_one_med_ab_us'
    )->name('med_ab_us_separate')->middleware('setLocale');

    Route::get(
        '/video',
        'App\Http\Controllers\VideoCategoryController@video_categories'
    )->name('video')->middleware('setLocale');

    Route::get(
        '/blog',
        'App\Http\Controllers\BlogController@index'
    )->name('blog')->middleware('setLocale');

    Route::get(
        '/blog/{id}',
        'App\Http\Controllers\BlogController@show_one_blog'
    )->name('blog_separate')->middleware('setLocale');


    Route::get(
        '/forInvestors',
        'App\Http\Controllers\ReportController@index'
    )->name('forInvestors')->middleware('setLocale');

    Route::get(
        '/careers',
        'App\Http\Controllers\CareerController@index'
    )->name('careers')->middleware('setLocale');

    Route::get(
        '/jobs_separate/{id}',
        'App\Http\Controllers\CareerController@show_one'
    )->name('jobs_separate')->middleware('setLocale');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact')->middleware('setLocale');



    Route::post('/apply_job', 'App\Http\Controllers\ApplicationController@store')->name('apply_job')->middleware('setLocale');
    Route::post('/form-submit', 'App\Http\Controllers\SubmitController@submit')->name('form-submit')->middleware('setLocale');
    Route::post('/form-submit-home',  'App\Http\Controllers\SubmitHomeController@submit')->name('form-submit-home')->middleware('setLocale');
    Route::post('/form-contact',  'App\Http\Controllers\ContactController@submit')->name('form-contact')->middleware('setLocale');
    Route::post('/form-investor',  'App\Http\Controllers\InvestorController@submit_email')->name('form-investor')->middleware('setLocale');
    Route::post('/application-sent',  'App\Http\Controllers\ApplicantsController@index')->name('application-sent')->middleware('setLocale');
});
