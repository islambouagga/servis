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


// SpringTravel Routes
$router->get('/availabilityHotel', 'SpringTravel\SpringTravelController@availabilityHotel');
$router->get('/detailHotel', 'SpringTravel\SpringTravelController@detailHotel');
$router->get('/devis', 'SpringTravel\SpringTravelController@devis');
$router->get('/createBooking', 'SpringTravel\SpringTravelController@createBooking');
$router->get('/demandeAnnulation', 'SpringTravel\SpringTravelController@demandeAnnulation');
$router->get('/confirmAnnulation', 'SpringTravel\SpringTravelController@confirmAnnulation');
$router->get('/getReservatio', 'SpringTravel\SpringTravelController@getReservatio');
$router->get('/findReservation', 'SpringTravel\SpringTravelController@findReservation');

// GoGlobalTravel Routes
$router->get('/hotelSearchRequest', 'GoGlobalTravel\GGTravelController@hotelSearchRequest');
$router->get('/hotelInfoRequest', 'GoGlobalTravel\GGTravelController@hotelInfoRequest');
$router->get('/hotelGoeInfoRequest', 'GoGlobalTravel\GGTravelController@hotelGoeInfoRequest');
$router->get('/bookingInsertRequest', 'GoGlobalTravel\GGTravelController@bookingInsertRequest');
$router->get('/bookingStatusRequest', 'GoGlobalTravel\GGTravelController@bookingStatusRequest');
$router->get('/bookingSearchRequest', 'GoGlobalTravel\GGTravelController@bookingSearchRequest');
$router->get('/advBookingSearchRequest', 'GoGlobalTravel\GGTravelController@advBookingSearchRequest');
$router->get('/bookingCancelRequest', 'GoGlobalTravel\GGTravelController@bookingCancelRequest');
$router->get('/bookingValuationRequest', 'GoGlobalTravel\GGTravelController@bookingValuationRequest');
$router->get('/voucherDetailsRequest', 'GoGlobalTravel\GGTravelController@voucherDetailsRequest');
$router->get('/priceBreakdownRequest', 'GoGlobalTravel\GGTravelController@priceBreakdownRequest');

// IRIX Routes
$router->get('/StaticData_GetCountries', 'IRIX\IRIXController@StaticData_GetCountries');
$router->get('/StaticData_GetCities', 'IRIX\IRIXController@StaticData_GetCities');
$router->get('/StaticData_GetLocations', 'IRIX\IRIXController@StaticData_GetLocations');
$router->get('/StaticData_GetHotels', 'IRIX\IRIXController@StaticData_GetHotels');
$router->get('/StaticData_GetHotelDetails', 'IRIX\IRIXController@StaticData_GetHotelDetails');
$router->get('/StaticData_GetNationalities', 'IRIX\IRIXController@StaticData_GetNationalities');
$router->get('/StaticData_GetRegions', 'IRIX\IRIXController@StaticData_GetRegions');
$router->get('/Hotel_GetAvailability', 'IRIX\IRIXController@Hotel_GetAvailability');
$router->get('/Hotel_GetPackagePrice', 'IRIX\IRIXController@Hotel_GetPackagePrice');
$router->get('/Hotel_GetOfferDetails', 'IRIX\IRIXController@Hotel_GetOfferDetails');
$router->get('/Hotel_MakeReservation', 'IRIX\IRIXController@Hotel_MakeReservation');
$router->get('/Reservation_GetDocument', 'IRIX\IRIXController@Reservation_GetDocument');
$router->get('/Reservation_Cancel', 'IRIX\IRIXController@Reservation_Cancel');

