<?php


namespace App\Http\Controllers\IRIX;


class IRIXRequest
{
    public function  GetCountriesRQ()
    {
        $query = new \StdClass();
        $query->GetCountriesRQ =  new \stdClass();
        $query->GetCountriesRQ->Filters= new \stdClass();
        $query->GetCountriesRQ->Filters->CountryName="U";
        return $query;
    }

    public function GetLocationsRQ(){
        $query = new \StdClass();
        $query->GetLocationsRQ =  new \stdClass();
        $query->GetLocationsRQ->CityID="2611";
        return $query;
    }
    public function GetHotelsRQ(){
        $query = new \StdClass();
        $query->GetHotelsRQ =  new \stdClass();
        $query->GetHotelsRQ->HotelID="";
        $query->GetHotelsRQ->CityID="2611";
        return $query;
    }

    public function GetHotelDetailsRQ(){
        $query = new \StdClass();
        $query->GetHotelDetailsRQ =  new \stdClass();
        $query->GetHotelDetailsRQ->HotelID="494420";

        return $query;
    }

    public function GetNationalitiesRQ(){
        $query = new \StdClass();
        $query->GetNationalitiesRQ =  new \stdClass();
        return $query;
    }
    public function GetRegionsRQ(){
        $query = new \StdClass();
        $query->GetRegionsRQ =  new \stdClass();
        $query->GetRegionsRQ->CountryID="223";
        return $query;
    }
    public function HotelGetAvailabilityRQ(){
        $query = new \StdClass();
        $query->HotelGetAvailabilityRQ =  new \stdClass();
        $query->HotelGetAvailabilityRQ->AddHotelDetails="true";
        $query->HotelGetAvailabilityRQ->AddHotelMinPrice="true";
        $query->HotelGetAvailabilityRQ->Location= new \stdClass();
        $query->HotelGetAvailabilityRQ->Location->City= new \stdClass();
        $query->HotelGetAvailabilityRQ->Location->City->CityID="2611";
        $query->HotelGetAvailabilityRQ->Location->City->CityCode="CZL";
        $query->HotelGetAvailabilityRQ->Location->City->Hotel=new \stdClass();
        $query->HotelGetAvailabilityRQ->Location->City->Hotel->HotelID="494420";
        $query->HotelGetAvailabilityRQ->DateRange=  new \stdClass();
        $query->HotelGetAvailabilityRQ->DateRange->Start="2020-12-05";
        $query->HotelGetAvailabilityRQ->DateRange->End="2020-12-15";
        $ArrayOfroom = array();
        $NumberOfRooms = 1;
        for ($i = 1; $i <= $NumberOfRooms; $i++) {
            $Room = new \stdClass();
            $Room->Adults= "2";
            $Room->Children="1";
            $childrenCount = 1;
            for ($i = 1; $i <= $childrenCount; $i++) {
                $Room->ChildAge= "8";
            }
            array_push($ArrayOfroom, $Room);
        }
        $query->HotelGetAvailabilityRQ->Rooms = $ArrayOfroom;
        $query->HotelGetAvailabilityRQ->Filters = new \stdClass();
        $query->HotelGetAvailabilityRQ->Filters->Nationality = new \stdClass();
        $query->HotelGetAvailabilityRQ->Filters->Nationality->ID= "3";
//        $data =  json_encode($query);
//        var_dump($data);
//        return $data;
        return $query;
    }

    public function HotelGetPackagePriceRQ(){
        $query=new \stdClass();
        $query->HotelGetPackagePriceRQ = new \stdClass();
        $query->HotelGetPackagePriceRQ->ResultCode="HOTEL-WS-c54cfe14d3f039f9ceefca99feffceb9";
        $query->HotelGetPackagePriceRQ->PackageCode="494420:c13293803b6da34b4f6009ea285d3760:0:9c54b487bccd5b4d5488b26046fe5d1e";
        $ArrayOfroom = array();
        $NumberOfRooms = 1;
        for ($i = 1; $i <= $NumberOfRooms; $i++) {
            $PackageRoom =  new \stdClass();
            $PackageRoom->PackageRoomCode="0";
            $PackageRoom->RoomCode="0";

            array_push($ArrayOfroom,$PackageRoom);
        }
        $query->HotelGetPackagePriceRQ->PackageRooms = $ArrayOfroom;
//        $data =  json_encode($query);
//        var_dump($data);
//        return $data;
        return $query;
    }
    public function HotelGetOfferDetailsRQ(){
        $query=new \stdClass();
        $query->HotelGetOfferDetailsRQ = new \stdClass();
        $query->HotelGetOfferDetailsRQ->ResultCode="HOTEL-WS-c54cfe14d3f039f9ceefca99feffceb9";
        $query->HotelGetOfferDetailsRQ->PackageCode="494420:c13293803b6da34b4f6009ea285d3760:0:9c54b487bccd5b4d5488b26046fe5d1e";
        $ArrayOfroom = array();
        $NumberOfRooms = 1;
        for ($i = 1; $i <= $NumberOfRooms; $i++) {
            $PackageRoom =  new \stdClass();
            $PackageRoom->PackageRoomCode="0";
            $PackageRoom->RoomCode="0";

            array_push($ArrayOfroom,$PackageRoom);
        }
        $query->HotelGetOfferDetailsRQ->PackageRooms = $ArrayOfroom;
//        $data =  json_encode($query);
//        var_dump($data);
//        return $data;
        return $query;
    }
    public function HotelMakeReservationRQ(){
        $query=new \stdClass();
        $query->HotelMakeReservationRQ = new \stdClass();
        $ArrayofPassenger = array();
        $PassengerNumber = 1;
         $PaxRef = 1 ;
        for ($i = 1; $i <= $PassengerNumber; $i++) {
            $Passenger = new \stdClass();
            $Passenger->PaxRef = $PaxRef;
            $Passenger->Type = "adult";
            $Passenger->Lead = "true";
            $Passenger->Title="mr";
            $Passenger->FirstName="islam";
            $Passenger->LastName ="islam";
            $Passenger->BirthDate ="1995-09-24";
            $Passenger->Email ="wachfiha@gmail.com";
            $Passenger->Phone ="0657701377";
            $Passenger->Address ="ouargla";
            $Passenger->City ="ouargla";
            $Passenger->Country ="alger";
            $Passenger->PostalCode ="30000";
            array_push($ArrayofPassenger,$Passenger);
            $PaxRef++;
        }
        $query->HotelMakeReservationRQ->Passengers=$ArrayofPassenger;
        $query->HotelMakeReservationRQ->ServiceConfig =  new \stdClass();
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService =  new \stdClass();
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->ResultCode="HOTEL-WS-019d3720d71cd383bd3074a5173a740d";
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->PackageCode="494420:54e565ef3d5acf6b990c52aca1e74040:0:d2214e4105a9ac81e8ca659eb49ebd33";
        $ArrayOfPackageroom = array();
        $NumberOfRooms = 1;
        for ($i = 1; $i <= $NumberOfRooms; $i++) {
            $PackageRoom =  new \stdClass();
            $PackageRoom->PackageRoomCode="0";
            $PackageRoom->RoomCode="0";
            $arrayofPaxRef = array();
            $PaxRefs=1;
            foreach ($ArrayofPassenger as $passenger){
                $PaxRef =  new \stdClass();
                $PaxRef->PaxRef =  $PaxRefs;
                array_push($arrayofPaxRef,$PaxRef);
                $PaxRefs++;
            }
            $PackageRoom->Passengers=$arrayofPaxRef;
            array_push($ArrayOfPackageroom,$PackageRoom);
        }
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->PackageRooms =$ArrayOfPackageroom;
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->PaymentMethod ="prepaid";
        $arrayofOptionCode =  array();
        $BookOptionsNumber =  1;
        for ($i = 1; $i <= $BookOptionsNumber; $i++) {
            $OptionCode =  new \stdClass();
            $OptionCode->OptionCode = "2";

            array_push($arrayofOptionCode ,$OptionCode);
        }
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->BookOptions =$arrayofOptionCode;
        $query->HotelMakeReservationRQ->ServiceConfig->HotelService->Comments ="test";
//                $data =  json_encode($query);
//        var_dump($data);
//        return $data;
        return $query;
    }
    public function ReservationGetDocumentRQ(){
        $query=new \stdClass();
        $query->ReservationGetDocumentRQ = new \stdClass();
        $query->ReservationGetDocumentRQ->ReservationID="18";
        $query->ReservationGetDocumentRQ->Document =  new \stdClass();
        $query->ReservationGetDocumentRQ->Document->DocType="resDetails";
        $query->ReservationGetDocumentRQ->Document->DocID="c9ae36391cd8933a05c00a2fcc5dec7d";
        return $query;
    }
    public function ReservationCancelRQ(){
        $query=new \stdClass();
        $query->ReservationCancelRQ = new \stdClass();
        $query->ReservationCancelRQ->ReservationID="18";
        return $query;
    }

    public function GetCitiesRQ(){
        $query=new \stdClass();
        $query->GetCitiesRQ = new \stdClass();
        $query->GetCitiesRQ->CountryID="1";
        return $query;
    }

}
