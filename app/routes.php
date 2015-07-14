<?php


Route::get('/', 'HomeController@showHomePage');

Route::get('/see-it-in-action', 'DemoRequestController@showConversionPage');
Route::get('/demo-request-confirmed', 'DemoRequestController@showConfirmationPage');
Route::post('/send-demo-request', 'DemoRequestController@sendDemoRequestViaEmail');

