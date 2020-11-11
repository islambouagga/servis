<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/availabilityHotel', 'SpringTravel\SpringTravelController@availabilityHotel');
$router->get('/callServise', 'GoGlobalTravel\GGTravelController@callServise');
$router->get('/test', 'GoGlobalTravel\GGTravelController@test');
$router->get('/hotelSearchRequest', 'GoGlobalTravel\GGTravelController@hotelSearchRequest');
$router->get('/Hotel_GetAvailability', 'IRIX\IRIXController@Hotel_GetAvailability');
$router->get('/StaticData_GetCountries', 'IRIX\IRIXController@StaticData_GetCountries');
$router->get('/Hotel_GetPackagePrice', 'IRIX\IRIXController@Hotel_GetPackagePrice');
$router->get('/Hotel_MakeReservation', 'IRIX\IRIXController@Hotel_MakeReservation');
$router->get('/demo', 'SoapController@demo');
$router->get('/AuthHeader', 'SoapController@AuthHeader');
$router->get('/GetCountriesRQ', 'SoapController@GetCountriesRQ');
$router->get('/demo2', 'SoapController@demo2');
$router->get('/availabilityhotelRequests', 'SoapController@availabilityhotelRequests');
