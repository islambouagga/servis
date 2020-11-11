<?php


namespace App\Http\Controllers\SpringTravel;


class STRequest
{
    public function availabilityhotelRequests()
    {
        $query = new \StdClass();
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
        return $query;
    }
    public function detailhotelRequest()
    {
        $query = new \StdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->session="p1vt3v799u9dj5aiskcm3v4040vl0eit";
        $query->id_hotel="72";
        $query->langue="en";
    }
    public function devisRequest(){
        $query = new \StdClass();
        $query = new \stdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->session = "f0v0dg77nrxlfe07dral5k0wu7v499iu";
        $query->id_hotel = "72";
        $query->pension = "lpd";
        $ArrayOfchamb = array();
        $NumberOfchambs = 1;
        for ($i = 1; $i <= $NumberOfchambs; $i++) {
            $chs = new \stdClass();
            $chs->code = "DBL";
            $chs->libelle_chambre = "";
            $chs->libelle_chambre_en = "";
            $chs->nombre_adult = "2";
            $chs->nombre_enfant = "0";
            $chs->nombre_bebe = "0";
            array_push($ArrayOfchamb, $chs);
        }
        $query->chambs = new \stdClass();
        $query->chambs->chs = $ArrayOfchamb;

        $data= json_decode( json_encode($query), true);
//        var_dump($data);
//        return $data;
        var_dump($query);
        return $query;

    }
    public function createbookingRequest(){
        $query = new \StdClass();

        $query->session = "7gsn9pn9sm9f9jgx6tdm9gmyuipinyf9";
        $ArrayOfTraveller = array();
        $NumberofTraveller = 1;
        $TravellerCount = 1;
        for ($i = 1; $i <= $NumberofTraveller; $i++) {
            $Traveller = new \stdClass();
            $Traveller->typ="adult";
            $Traveller->ID=$TravellerCount;
            $Traveller->FirstName = "";
            $Traveller->LastName = "";
            $Traveller->civiliti = "";
            $Traveller->BirthDate = "";
            array_push($ArrayOfTraveller, $Traveller);
            $TravellerCount++;
        }
        $query->travels = new \stdClass();
        $query->travels->Traveller = $ArrayOfTraveller;
        $query->organisateur = new \stdClass();
        $query->organisateur->typ="adult";
        $query->organisateur->FirstName = "";
        $query->organisateur->LastName = "";
        $query->organisateur->civiliti = "";
        $query->organisateur->adresse = "";
        $query->organisateur->cp = "";
        $query->organisateur->pays = "";
        $query->organisateur->ville = "";
        $query->organisateur->mail = "";
        $query->organisateur->tel = "";
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->info_agence =  new \stdClass();
        $query->info_agence->type_reglement="debiteur";
        $query->info_agence->debiteur="";
        $query->info_agence->marge="";
        $query->info_agence->etat_paiement="confirmer";
        $query->info_agence->email_client="";
        $query->info_agence->tel_client="";
        $query->info_agence->agence="touroperatorb2b";
        $query->note_supplementaire= "test demo";

        return $query;
    }
    public function demandeannulationRequest(){
        $query = new \StdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->reference = "";
        $query->type_penalite = "annulation<";
        return $query;
    }
    public function confirmannulationRequest(){
        $query = new \StdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->session = "";
        return $query;
    }
    public function getreservatioRequestn(){
        $query = new \StdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->reference = "";
        return $query;
    }
    public function findreservationRequest()
    {
        $query = new \StdClass();
        $query->login = "urplanethotels";
        $query->pw = "urplanet@2020GHD";
        $query->debut = "";
        $query->fin = "";
        return $query;
    }
}
