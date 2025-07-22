<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\SetLocale;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('pages.home');
    })->name('home');

    // باقي الروابط
    Route::view('/about', 'pages.about')->name('about');
    Route::view('/services', 'pages.services')->name('services');
    Route::view('/team', 'pages.team')->name('team');
    Route::view('/blog', 'pages.blog')->name('blog');
    Route::view('/contact', 'pages.contact')->name('contact');

    Route::get('lang/{lang}', function ($lang) {
        if (in_array($lang, ['ar', 'en'])) {
            session(['locale' => $lang]);
        }
        return redirect()->back();
    })->name('changeLang');
});

