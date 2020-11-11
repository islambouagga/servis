<?php

namespace App\Http\Controllers;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
class SoapController extends Controller
{




    public $soap;

    public function __construct( )
    {
        $this->soap = new Soap();
    }
    public function demo()
    {



        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('currency')
                    ->wsdl('https://www.onlineb2bcenter.com/reseller/ws/?wsdl')
                ->trace(true)

                ->customHeader([
                    'ResellerCode' => 'CHRYSALIS',
                    'Username' => 'chrysalisws',
                    'Password' => 'Qwerty1!',]);
        });


        $data = [
            'CurrencyFrom' => 'USD',
            'CurrencyTo'   => 'EUR',
            'RateDate'     => '2014-06-05',
            'Amount'       => '1000'
        ];

        // Using the added service
        SoapWrapper::service('currency', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('StaticData_GetCountries',(array) $this->GetCountriesRQ()));
        });

    }

    public function AuthHeader(){
        $query = new \StdClass();
        $query->AuthHeader= new \stdClass();
        $query->AuthHeader->ResellerCode="CHRYSALIS";
        $query->AuthHeader->Username="chrysalisws";
        $query->AuthHeader->Password="Qwerty1!";
        return $query;
    }

    public function  GetCountriesRQ()
    {
        $query = new \StdClass();
        $query->GetCountriesRQ =  new \stdClass();
        $query->GetCountriesRQ->Filters= new \stdClass();
        $query->GetCountriesRQ->Filters->CountryName="U";
//        var_dump($query);
        return $query;
    }

    public function demo2 (){
        $data = [
            'ipfrom' => '84.16.93.137',
            'ville'   => 'ain draham',
            'idhotel'   => '',
            'debut'   => '2020-11-21',
            'fin'   => '2020-11-26',
            'rooms'   => '',
            'login'   => 'urplanethotels',
            'pw'   => 'urplanet@2020GHD',
            'langue'   => 'fr',
            'marche'   => 'Magrabein',
            'monnaie'   => 'DZD',
            'redagence'   => '',
            'resafrom'   => '',
            'iduser'   => '877',
            'nationalite'   => 'FR',
        ];
//        return  $data;
//return  $this->availabilityhotelRequests();
            var_dump($this->soap->call('availabilityhotel',(array) $this->availabilityhotelRequests()));
//            return $this->soap->functions();
    }



    public function availabilityhotelRequests()
    {
        $query = new \StdClass();
//        $query = new \stdClass();
        $query->ipfrom = "84.16.93.137";
        $query->ville = "ain draham";
        $query->idhotel = "";
        $query->debut = "2020-11-21";
        $query->fin = "2020-11-26";
        $ArrayOfroom = array();
        $NumberOfRooms = 1;
        $TravellerCount = 1;
        for ($i = 1; $i <= $NumberOfRooms; $i++) {
            $room = new \stdClass();
            $adultCount = 2;
            $childrenCount = 1;
            $ArrayOfTraveller = array();
            for ($i = 1; $i <= $adultCount; $i++) {
                $Traveller = new \stdClass();
                $Traveller->typ = "adult";
                $Traveller->age = "";
                $Traveller->BirthDate = "";
                $Traveller->ID = $TravellerCount;
                $Traveller->FirstName = "";
                $Traveller->LastName = "";
                $Traveller->civiliti = "";
                $Traveller->adresse = "";
                $Traveller->cp = "";
                $Traveller->pays = "";
                $Traveller->ville = "";
                $Traveller->mail = "";
                $Traveller->tel = "";
                array_push($ArrayOfTraveller, $Traveller);
                $TravellerCount++;
            }
            for ($i = 1; $i <= $childrenCount; $i++) {
                $age = 3;
                $Traveller = new \stdClass();
                if ($age > 1) {
                    $Traveller->typ = "enfant";
                } else {
                    $Traveller->typ = "bebe";
                }
                $Traveller->age = $age;
                $Traveller->BirthDate = "";
                $Traveller->ID = $TravellerCount;
                $Traveller->LastName = "";
                $Traveller->civiliti = "";
                $Traveller->adresse = "";
                $Traveller->cp = "";
                $Traveller->pays = "";
                $Traveller->ville = "";
                $Traveller->mail = "";
                $Traveller->tel = "";
                array_push($ArrayOfTraveller, $Traveller);
                $TravellerCount++;
            }
            $room->Traveller = $ArrayOfTraveller;
            array_push($ArrayOfroom, $room);
        }
        $query->rooms = new \stdClass();
        $query->rooms->room = $ArrayOfroom;
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->langue = "fr";
        $query->marche = "Magrabein";
        $query->monnaie = "DZD";
        $query->redagence = "";
        $query->resafrom = "";
        $query->iduser = "877";
        $query->nationalite = "FR";
//        $array = json_decode(json_encode($query), true);
        //var_dump($query);
        $data= json_encode($query);
//        return $data;
//        var_dump($query);
   return $query;
//        response()->json([$query]);
    }
}
