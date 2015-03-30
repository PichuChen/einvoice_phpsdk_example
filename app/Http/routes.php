<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# Route::get('/', 'WelcomeController@index');

Route::get('/', function(){
  return View::make('index');
});

Route::get('/test','EinvoiceController@test');

Route::get('/carrierInvoiceDetail','EinvoiceController@carrierInvoiceDetail');

Route::get('/queryWinningList','EinvoiceController@queryWinningList');

Route::get('/queryInvoiceHeader','EinvoiceController@queryInvoiceHeader');

Route::get('/queryInvoiceDetail','EinvoiceController@queryInvoiceDetail');



Route::get('home', 'HomeController@index');

Route::get('queryCarrierInvoice.html',function(){
    return View::make('queryCarrierInvoice');
});

Route::get('queryWinningList.html',function(){
    return View::make('queryWinningList');
});

Route::get('queryInvoiceHeader.html',function(){
    return View::make('queryInvoiceHeader');
});

Route::get('queryInvoiceDetail.html',function(){
    return View::make('queryInvoiceDetail');
});



Route::get('null',function(){

});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
