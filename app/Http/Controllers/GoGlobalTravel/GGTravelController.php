<?php


namespace App\Http\Controllers\GoGlobalTravel;
use Artisaninweb\SoapWrapper\Facades\SoapWrapper;

class GGTravelController extends \App\Http\Controllers\Controller
{

    public $ggtRequest;
    public function __construct( )
    {
        $this->ggtRequest = new ggtRequest();
    }




    public function hotelSearchRequest()
    {
        $this->ggtRequest->setRequestType(11);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main11(1, 0, 1000, 20, 500, 'HB', 'GB', 1133, 33818, '2020-11-05', 3, 7, 'true');
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function hotelInfoRequest()
    {
        $this->ggtRequest->setRequestType(6);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main6(33818);
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function hotelGoeInfoRequest()
    {
        $this->ggtRequest->setRequestType(61);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main6(33818);
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function bookingInsertRequest()
    {
        $this->ggtRequest->setRequestType(2);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main2("Test AgRef", "11275046/4425764357706917095/5582", "2020-10-05", 3, "1");
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function bookingStatusRequest()
    {
        $this->ggtRequest->setRequestType(5);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main5(18437681);
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function bookingSearchRequest()
    {
        $this->ggtRequest->setRequestType(4);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main4(18437681);
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function advBookingSearchRequest()
    {
        $this->ggtRequest->setRequestType(10);
        $requestType = $this->getRequestType();
        $header = $this->setHeader();
        $this->ggtRequest->main10("2020-10-01", "2020-10-30", "JOHN DOE", 1133, 3, "CLEVELAND");
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function bookingCancelRequest()
    {
        $this->ggtRequest->setRequestType(3);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main3(18437681);
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function bookingValuationRequest()
    {
        $this->ggtRequest->setRequestType(9);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main9("11363301/3527577741245198494/608", "2012-11-05");
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function voucherDetailsRequest()
    {
        $this->ggtRequest->setRequestType(8);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main8("18437811", "true");
        $main = $this->$this->ggtRequest();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }

    public function priceBreakdownRequest()
    {
        $this->ggtRequest->setRequestType(14);
        $requestType = $this->ggtRequest->getRequestType();
        $header = $this->ggtRequest->setHeader();
        $this->ggtRequest->main14("11275046/700105648464590535/4421");
        $main = $this->ggtRequest->getMain();
        $xmlRequest = "<Root>" . $header . $main . "</Root>";
        $this->callServise(new MakeRequest($requestType, $xmlRequest));
    }



    public function callServise(MakeRequest $request )
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('goGlobalT')
                ->wsdl('https://algebratec.xml.goglobal.travel/xmlwebservice.asmx?wsdl')
                ->trace(true)
             ;
        });

        $data = [

        ];

        // Using the added service
        SoapWrapper::service('goGlobalT', function ($service) use ($request) {

            $arr= $service->getFunctions();
//            var_dump($arr[1]);
//            var_dump((array)$request);
            var_dump($service->call('MakeRequest',[
                new MakeRequest($request->getRequestType(), $request->getXmlRequest())
            ]));
        });
    }

}
