<?php


namespace App\Http\Controllers\SpringTravel;

use Artisaninweb\SoapWrapper\Facades\SoapWrapper;
class SpringTravelController extends \App\Http\Controllers\Controller
{
    public $stRequest;
    public function __construct( )
    {
        $this->stRequest = new STRequest();
    }
    public function availabilityHotel()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->availabilityhotelRequests();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('availabilityhotel',$data ));
        });
    }
    public function detailhotel()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->detailhotelRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('detailhotel',$data ));
        });
    }
    public function devis()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->devisRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('devis',$data ));
        });
    }
    public function createbooking()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->createbookingRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('createbooking',$data ));
        });
    }
    public function demandeannulation()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->demandeannulationRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('demandeannulation',$data ));
        });
    }
    public function confirmannulation()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->confirmannulationRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('confirmannulation',$data ));
        });
    }
    public function getreservatio()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->getreservatioRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('getreservatio',$data ));
        });
    }
    public function findreservation()
    {
        // Add a new service to the wrapper
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });

        $data = (array) $this->stRequest->findreservationRequest();

        // Using the added service
        SoapWrapper::service('springT', function ($service) use ($data) {
//            var_dump($service->getFunctions());
            var_dump($service->call('findreservation',$data ));
        });
    }
}
