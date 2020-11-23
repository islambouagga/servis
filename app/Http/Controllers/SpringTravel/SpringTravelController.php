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
    public function addServiceToWrapper(){
        SoapWrapper::add(function ($service) {
            $service
                ->name('springT')
                ->wsdl('http://www.resabooking.com/auto_hot_xft_test.php?wsdl')
                ->trace(true);
        });
    }
    public function availabilityHotel()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service)  {
            var_dump($service->call('availabilityhotel',(array) $this->stRequest->availabilityhotelRequests() ));
        });
    }
    public function detailHotel()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service){
            var_dump($service->call('detailhotel',(array) $this->stRequest->detailhotelRequest() ));
        });
    }
    public function devis()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service) {
//            var_dump($service->getFunctions());
            var_dump($service->call('devis', (array) $this->stRequest->devisRequest() ));
        });
    }
    public function createBooking()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service){
            var_dump($service->call('createbooking',(array) $this->stRequest->createbookingRequest() ));
        });
    }
    public function demandeAnnulation()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service){
            var_dump($service->call('demandeannulation',(array) $this->stRequest->demandeannulationRequest() ));
        });
    }
    public function confirmAnnulation()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service) {
            var_dump($service->call('confirmannulation',(array) $this->stRequest->confirmannulationRequest() ));
        });
    }
    public function getReservatio()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service) {
            var_dump($service->call('getreservatio',(array) $this->stRequest->getreservatioRequest() ));
        });
    }
    public function findReservation()
    {
        // Add a new service to the wrapper
        $this->addServiceToWrapper();
        // Using the added service
        SoapWrapper::service('springT', function ($service) {
            var_dump($service->call('findreservation',(array) $this->stRequest->findreservationRequest() ));
        });
    }
}
