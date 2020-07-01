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

Route::get(
    '/contacts/all/{id}', 
    'ContactController@showOneMessage'
)->name('contact-data-one');

Route::get(
    '/contacts/all/{id}/update', 
    'ContactController@updateMessage'
)->name('contact-update');

Route::get(
    '/contacts/all/{id}/delete', 
    'ContactController@deleteMessage'
)->name('contact-delete');

Route::post(
    '/contacts/all/{id}/update', 
    'ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get('/contacts/all', 'ContactController@allData')->name('contact-data');
Route::post('/contacts/submit', 'ContactController@submit')->name('contact-form');