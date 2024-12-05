<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/mascarillas', function () {
    return view('mascarillas');
})->name('mascarillas');

Route::get('/jabones', function () {
    return view('jabones');
})->name('jabones');

Route::get('/shampoo', function () {
    return view('shampoo');
})->name('shampoo');

Route::get('/acondicionador', function () {
    return view('acondicionador');
})->name('acondicionador');

Route::get('/serums', function () {
    return view('serums');
})->name('serums');

Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');



Route::post('/send-order', 'OrderController@sendOrder');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'HomeController@index');