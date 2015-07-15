<?php


Route::get('/', 'HomeController@showHomePage');

Route::get('/see-it-in-action', 'DemoRequestController@showConversionPage');
Route::get('/demo-request-confirmed', 'DemoRequestController@showConfirmationPage');
Route::post('/send-demo-request', 'DemoRequestController@sendDemoRequestViaEmail');

Route::get('/get-started', 'BetaRequestController@showConversionPage');
Route::get('/beta-request-confirmed', 'BetaRequestController@showConfirmationPage');
Route::post('/send-beta-request', 'BetaRequestController@sendBetaRequestViaEmail');


Route::get('/engagement/{title}', 'EngagementController@showPage');
