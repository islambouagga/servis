<?php


namespace App\Http\Controllers\GoGlobalTravel;


class GGTRequest
{
    // getters and setters

    /**
     * @return string
     */
    public function getMain()
    {
        return $this->main;
    }

    public function main11($sortOrder, $filterPriceMin, $filterPriceMax, $maximumWaitTime, $maxResponses, $filterRoomBasis, $nationality, $cityCode, $hotelId, $arrivalDate, $nights, $stars, $apartments)
    {
        return $this->main =
            "<Main Version=\"2.3\" ResponseFormat=\"JSON\" IncludeGeo=\"false\" Currency=\"USD\">"
            . $this->setSortOrder($sortOrder)
            . $this->setFilterPriceMin($filterPriceMin)
            . $this->setFilterPriceMax($filterPriceMax)
            . $this->setMaximumWaitTime($maximumWaitTime)
            . $this->setMaxResponses($maxResponses)
            . $this->setFilterRoomBasis($filterRoomBasis)
            . $this->setNationality($nationality)
            . $this->setCityCode($cityCode)
            . $this->setHotelId($hotelId)
            . $this->setArrivalDate($arrivalDate)
            . $this->setNights($nights)
            . $this->setStars($stars)
            . $this->setApartments($apartments) .
            "<Rooms>
            <Room Adults=\"1\" RoomCount=\"1\" ChildCount=\"0\">
            </Room>
            </Rooms>
            </Main>";
    }

    public function main6($hotelSearchCode)
    {
        return $this->main =
            "<Main>"
            . $this->setHotelSearchCode($hotelSearchCode) .
            "</Main>";

    }

    public function main2($agentReference, $hotelSearchCode, $arrivalDate, $nights, $noAlternativeHotel)
    {
        return $this->main =
            "<Main Version=\"2.3\" ResponseFormat=\"JSON\">"
            . $this->setAgentReference($agentReference)
            . $this->setHotelSearchCode($hotelSearchCode)
            . $this->setArrivalDate($arrivalDate)
            . $this->setNights($nights)
            . $this->setnoAlternativeHotel($noAlternativeHotel) .
            "<Leader LeaderPersonID=\"1\"/>
            <Rooms>
            <RoomType Adults=\"1\">
            <Room RoomID=\"1\">
            <PersonName PersonID=\"1\" Title=\"MR.\" FirstName=\"JOHN\" LastName=\"DOE\"/>
            </Room>
            </RoomType>
            </Rooms>
            </Main>";
    }
    public function main5($goBookingCode){
        return $this->main =
            "<Main>".$this->setGoBookingCode($goBookingCode)."</Main>";
    }
    public function main4($goBookingCode){
        return $this->main =
            "<Main>".$this->setGoBookingCode($goBookingCode)."</Main>";
    }
    public function main10($arrivalDateRangeFrom,$arrivalDateRangeTo,$paxName,$cityCode,$nights,$hotelName){
        return $this->main =
            "<Main>"
            .$this->setArrivalDateRangeFrom($arrivalDateRangeFrom)
            .$this->setArrivalDateRangeTo($arrivalDateRangeTo)
            .$this->setPaxName($paxName)
            .$this->setCityCode($cityCode)
            .$this->setNights($nights)
            .$this->setHotelName($hotelName).
            "</Main>";
    }

    public function main3($goBookingCode){
        return $this->main =
            "<Main>".$this->setGoBookingCode($goBookingCode)."</Main>";
    }
    public function main9($hotelSearchCode,$arrivalDate){
        return $this->main =
            "<Main>"
            .$this->setHotelSearchCode($hotelSearchCode)
            .$this->setArrivalDate($arrivalDate).
            "</Main>";
    }

    public function main8($goBookingCode,$getEmergencyPhone){

        return $this->main =
            "<Main Version=\"2.3\">"
            .$this->setGoBookingCode($goBookingCode)
            .$this->setGetEmergencyPhone($getEmergencyPhone).
            "</Main>";
    }

    public function main14($hotelSearchCode){
        return $this->main =
            "<Main>".$this->setHotelSearchCode($hotelSearchCode)."</Main>";
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return string
     */
    public function setHeader()
    {
        $this->header =
            "<Header>
             <Agency>122476</Agency>
             <User>ALGEBRATECXMLTEST</User>
             <Password>YDS3XLPRLMVJ</Password>"
            . $this->setOperation() .
            "<OperationType>Request</OperationType>
            </Header>";
        return $this->header;
    }


    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @return string
     */
    public function setOperation()
    {
        if ($this->getRequestType() == "11") {
            $this->operation = "<Operation>HOTEL_SEARCH_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "6" or $this->getRequestType() == "61") {
            $this->operation = "<Operation>HOTEL_INFO_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "2") {
            $this->operation = "<Operation>BOOKING_INSERT_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "5") {
            $this->operation = "<Operation>BOOKING_STATUS_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "4") {
            $this->operation = "<Operation>BOOKING_SEARCH_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "10") {
            $this->operation = "<Operation>ADV_BOOKING_SEARCH_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "3") {
            $this->operation = "<Operation>BOOKING_CANCEL_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "9") {
            $this->operation = "<Operation>BOOKING_VALUATION_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "8") {
            $this->operation = "<Operation>VOUCHER_DETAILS_REQUEST</Operation>";
        }
        if ($this->getRequestType() == "14") {
            $this->operation = "<Operation>PRICE_BREAKDOWN_REQUEST</Operation>";
        }
        return $this->operation;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param  $requestType
     * @return string
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * @param  $sortOrder
     * @return string
     */
    public function setSortOrder($sortOrder)
    {
        return $this->sortOrder = "<SortOrder>$sortOrder</SortOrder>";
    }

    /**
     * @return string
     */
    public function getFilterPriceMin()
    {
        return $this->filterPriceMin;
    }

    /**
     * @param  $filterPriceMin
     * @return string
     */
    public function setFilterPriceMin($filterPriceMin)
    {
        return $this->filterPriceMin = "<FilterPriceMin>$filterPriceMin</FilterPriceMin>";
    }

    /**
     * @return string
     */
    public function getFilterPriceMax()
    {
        return $this->filterPriceMax;
    }

    /**
     * @param  $filterPriceMax
     * @return string
     */
    public function setFilterPriceMax($filterPriceMax)
    {
        return $this->filterPriceMax = "<FilterPriceMin>$filterPriceMax</FilterPriceMin>";
    }

    /**
     * @return string
     */
    public function getMaximumWaitTime()
    {
        return $this->maximumWaitTime;
    }

    /**
     * @param  $maximumWaitTime
     * @return string
     */
    public function setMaximumWaitTime($maximumWaitTime)
    {
        return $this->maximumWaitTime = "<MaximumWaitTime>$maximumWaitTime</MaximumWaitTime>";
    }

    /**
     * @return string
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * @param  $maxResponses
     * @return string
     */
    public function setMaxResponses($maxResponses)
    {
        return $this->maxResponses = "<MaxResponses>$maxResponses</MaxResponses>";
    }

    /**
     * @return string
     */
    public function getFilterRoomBasis()
    {
        return $this->filterRoomBasis;
    }

    /**
     * @param  $filterRoomBasis
     * @return string
     */
    public function setFilterRoomBasis($filterRoomBasis)
    {
        return $this->filterRoomBasis = "<FilterRoomBasis>$filterRoomBasis</FilterRoomBasis>";
    }


    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param  $nationality
     * @return string
     */
    public function setNationality($nationality)
    {
        return $this->nationality = "<Nationality>$nationality</Nationality>";
    }


    /**
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param  $cityCode
     * @return string
     */
    public function setCityCode($cityCode)
    {
        return $this->cityCode = "<CityCode>$cityCode</CityCode>";
    }

    /**
     * @return string
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param  $hotelId
     * @return string
     */
    public function setHotelId($hotelId)
    {
        return $this->hotelId = "<HotelId>$hotelId</HotelId>";
    }

    /**
     * @return string
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * @param  $arrivalDate
     * @return string
     */
    public function setArrivalDate($arrivalDate)
    {
        return $this->arrivalDate = "<ArrivalDate>$arrivalDate</ArrivalDate>";
    }


    /**
     * @return string
     */
    public function getApartments()
    {
        return $this->apartments;
    }

    /**
     * @param  $apartments
     * @return string
     */
    public function setApartments($apartments)
    {
        return $this->apartments = "<Apartments>$apartments</Apartments>";
    }


    /**
     * @return string
     */
    public function getNights()
    {
        return $this->nights;
    }

    /**
     * @param  $nights
     * @return string
     */
    public function setNights($nights)
    {
        return $this->nights = "<Nights>$nights</Nights>";
    }


    /**
     * @return string
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * @param  $stars
     * @return string
     */
    public function setStars($stars)
    {
        return $this->stars = "<Stars>$stars</Stars>";
    }

    /**
     * @return string
     */
    public function getHotelSearchCode()
    {
        return $this->hotelSearchCode;
    }

    /**
     * @param  $hotelSearchCode
     * @return string
     */
    public function setHotelSearchCode($hotelSearchCode)
    {
        return $this->hotelSearchCode = "<HotelSearchCode>$hotelSearchCode</HotelSearchCode>";
    }

    /**
     * @return string
     */
    public function getAgentReference()
    {
        return $this->agentReference;
    }

    /**
     * @param  $agentReference
     * @return string
     */
    public function setAgentReference($agentReference)
    {
        return $this->agentReference = "<AgentReference>$agentReference</AgentReference>";
    }

    /**
     * @return string
     */
    public function getNoAlternativeHotel()
    {
        return $this->noAlternativeHotel;
    }

    /**
     * @param  $noAlternativeHotel
     * @return string
     */
    public function setNoAlternativeHotel($noAlternativeHotel)
    {
        return $this->noAlternativeHotel = "<NoAlternativeHotel>$noAlternativeHotel</NoAlternativeHotel>";
    }

    /**
     * @return string
     */
    public function getGoBookingCode()
    {
        return $this->goBookingCode;
    }

    /**
     * @param  $goBookingCode
     * @return string
     */
    public function setGoBookingCode($goBookingCode)
    {
        return $this->goBookingCode = "<GoBookingCode>$goBookingCode</GoBookingCode>";
    }
    /**
     * @return string
     */
    public function getArrivalDateRangeFrom()
    {
        return $this->arrivalDateRangeFrom;
    }

    /**
     * @param  $arrivalDateRangeFrom
     * @return string
     */
    public function setArrivalDateRangeFrom($arrivalDateRangeFrom)
    {
        return $this->arrivalDateRangeFrom = "<ArrivalDateRangeFrom>$arrivalDateRangeFrom</ArrivalDateRangeFrom>";
    }

    /**
     * @return string
     */
    public function getArrivalDateRangeTo()
    {
        return $this->arrivalDateRangeTo;
    }

    /**
     * @param  $arrivalDateRangeTo
     * @return string
     */
    public function setArrivalDateRangeTo($arrivalDateRangeTo)
    {
        return $this->arrivalDateRangeFrom = "<ArrivalDateRangeTo>$arrivalDateRangeTo</ArrivalDateRangeTo>";
    }

    /**
     * @return string
     */
    public function getPaxName()
    {
        return $this->paxName;
    }

    /**
     * @param  $paxName
     * @return string
     */
    public function setPaxName($paxName)
    {
        return $this->paxName = "<PaxName>$paxName</PaxName>";
    }

    /**
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * @param  $hotelName
     * @return string
     */
    public function setHotelName($hotelName)
    {
        return $this->hotelName = "<HotelName>$hotelName</HotelName>";
    }

    /**
     * @return string
     */
    public function getGetEmergencyPhone()
    {
        return $this->getEmergencyPhone;
    }

    /**
     * @param  $getEmergencyPhone
     * @return string
     */
    public function setGetEmergencyPhone($getEmergencyPhone)
    {
        return $this->hotelName = "<GetEmergencyPhone>$getEmergencyPhone</GetEmergencyPhone>";
    }

    // variables
    /**
     * @var string $requestType
     */
    protected $requestType = null;
    /**
     * @var string $main
     */
    protected $main = null;

    /**
     * @var string $header
     */
    protected $header = null;

    /**
     * @var string $operation
     */
    protected $operation = null;
    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;
    /**
     * @var string $filterPriceMin
     */
    protected $filterPriceMin = null;

    /**
     * @var string $filterPriceMax
     */
    protected $filterPriceMax = null;

    /**
     * @var string $maximumWaitTime
     */
    protected $maximumWaitTime = null;

    /**
     * @var string $maxResponses
     */
    protected $maxResponses = null;

    /**
     * @var string $filterRoomBasis
     */
    protected $filterRoomBasis = null;

    /**
     * @var string $nationality
     */
    protected $nationality = null;

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;


    /**
     * @var string $hotelId
     */
    protected $hotelId = null;

    /**
     * @var string $arrivalDate
     */
    protected $arrivalDate = null;
    /**
     * @var string $nights
     */
    protected $nights = null;

    /**
     * @var string $stars
     */
    protected $stars = null;

    /**
     * @var string $apartments
     */
    protected $apartments = null;

    /**
     * @var string $rooms
     */
    protected $rooms = null;
    /**
     * @var string $hotelSearchCode
     */
    protected $hotelSearchCode = null;
    /**
     * @var string $agentReference
     */
    protected $agentReference = null;
    /**
     * @var string $noAlternativeHotel
     */
    protected $noAlternativeHotel = null;

    /**
     * @var string $goBookingCode
     */
    protected $goBookingCode = null;
    /**
     * @var string $arrivalDateRangeFrom
     */
    protected $arrivalDateRangeFrom = null;
    /**
     * @var string $arrivalDateRangeTo
     */
    protected $arrivalDateRangeTo = null;
    /**
     * @var string $paxName
     */
    protected $paxName;
    /**
     * @var string $hotelName
     */
    protected $hotelName;
    /**
     * @var string $getEmergencyPhone
     */
    protected $getEmergencyPhone;

}
