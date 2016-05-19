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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	]);

Route::get('master/currency','HomeController@view_Currency');

Route::get('cronGetCurrency','HomeController@get_Currency');

Route::get('master/lang','HomeController@view_lang');

Route::get('cronGetLang','HomeController@get_lang');

Route::get('master/country','HomeController@view_country');

Route::get('cronGetCountry','HomeController@get_country');

Route::get('master/airport','HomeController@view_airport');

Route::get('cronGetAirport','HomeController@get_airport');

Route::get('airline/flight',['as'=>'airline_flight',
								'uses'=>'Reservasi@flight']);

Route::post('airline/flight/search',['as'=>'ajax_search_flight',
									 'uses'=>'Reservasi@searchflight']);

// Route::get('cronGetCurrency',function()
// {
// 		$api = new App\Http\controllers\TiketAPI\APIController;
// 		$api->getCurl('general_api\listLanguage');
// });


// Route::get('cronGetCurrency',function()
// {
// 		$api = new App\Http\controllers\TiketAPI\APIController;
// 		$api->getCurl('general_api\listCountry');
// });

