<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contacts/all', 'ContactController@allData')->name('contact-data');
Route::post('/contacts/submit', 'ContactController@submit')->name('contact-form');