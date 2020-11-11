<?php

namespace App\Http\Controllers\IRIX;

use App\Http\Controllers\Controller;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class IRIXController extends Controller
{


    public $irixRequest;

    public function __construct()
    {
        $this->irixRequest = new IRIXRequest();
    }

    public function StaticData_GetCountries()
    {


        $strHeaderComponent_Session = "<ns:AuthHeader>
      <ns:ResellerCode>CHRYSALIS</ns:ResellerCode>
         <ns:Username>chrysalisws</ns:Username>
         <ns:Password>Qwerty1!</ns:Password>
         <!--Optional:-->
         <ns:ApplicationId>?</ns:ApplicationId>
      </ns:AuthHeader>";

        $objVar_Session_Inside = new \SoapVar($strHeaderComponent_Session, XSD_ANYXML, null, null, null);
        $objHeader_Session_Outside = new \SoapHeader('http://schemas.xmlsoap.org/soap/envelope/', 'SessionHeader', $objVar_Session_Inside);



//        $headerbody = array($this->AuthHeader());
//
//        $myheader =  new \SoapHeader("https://www.onlineb2bcenter.com/reseller/ws/?wsdl",'StaticData_GetCountries',$headerbody);


        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) use ($objHeader_Session_Outside) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader($objHeader_Session_Outside);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetCountries', (array)$this->irixRequest->GetCountriesRQ()));
        });

    }

    public function StaticData_GetCities()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetOfferDetails', (array)$this->irixRequest->GetCitiesRQ()));
        });
    }

    public function StaticData_GetLocations()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetLocations', (array)$this->irixRequest->GetLocationsRQ()));
        });
    }

    public function StaticData_GetHotels()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetHotels', (array)$this->irixRequest->GetHotelsRQ()));
        });
    }

    public function StaticData_GetHotelDetails()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetHotelDetails', (array)$this->irixRequest->GetHotelDetailsRQ()));
        });
    }

    public function StaticData_GetNationalities()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetNationalities', (array)$this->irixRequest->GetNationalitiesRQ()));
        });
    }

    public function StaticData_GetRegions()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetRegions', (array)$this->irixRequest->GetRegionsRQ()));
        });
    }

    public function Hotel_GetAvailability()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetAvailability', (array)$this->irixRequest->HotelGetAvailabilityRQ()));
        });
    }

    public function Hotel_GetPackagePrice()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetPackagePrice', (array)$this->irixRequest->HotelGetPackagePriceRQ()));
        });
    }

    public function Hotel_GetOfferDetails()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetOfferDetails', (array)$this->irixRequest->HotelGetOfferDetailsRQ()));
        });
    }

    public function Hotel_MakeReservation()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetOfferDetails', (array)$this->irixRequest->HotelMakeReservationRQ()));
        });
    }

    public function Reservation_GetDocument()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetOfferDetails', (array)$this->irixRequest->ReservationGetDocumentRQ()));
        });
    }

    public function Reservation_Cancel()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('Irix')
                ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)
                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo' => 'EUR',
            'RateDate' => '2014-06-05',
            'Amount' => '1000'
        ];

        // Using the added service
        SoapWrapper::service('Irix', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('Hotel_GetOfferDetails', (array)$this->irixRequest->ReservationCancelRQ()));
        });
    }


    public function AuthHeader()
    {
        $query = new \StdClass();
        $query->AuthHeader = new \stdClass();
        $query->AuthHeader->ResellerCode = "CHRYSALIS";
        $query->AuthHeader->Username = "chrysalisws";
        $query->AuthHeader->Password = "Qwerty1!";
        return $query;
    }


}
