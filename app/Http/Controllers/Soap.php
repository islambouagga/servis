<?php


namespace App\Http\Controllers;

use Artisaninweb\SoapWrapper\Extension\SoapService;
class Soap extends SoapService
{
    /**
     * @var string
     */
    protected $name = 'currency';

    /**
     * @var string
     */
    protected $wsdl = 'http://www.resabooking.com/auto_hot_xft_test.php?wsdl';

    /**
     * @var boolean
     */
    protected $trace = true;



    /**
     * Get all the available functions
     *
     * @return mixed
     */
    public function functions()
    {
        return $this->setSoapHeaders();
    }
}
