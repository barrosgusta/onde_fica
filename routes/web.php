<?php

use Illuminate\Support\Facades\Route;

Route::get('/{locale}', function ($locale) {
    if (isset($locale)){
        App::setLocale($locale);
    }    
    return view('welcome');
})->name('home');

Route::get('/', function () {
    App::setLocale("br");
    return view('welcome');
});
