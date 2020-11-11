<?php


namespace App\Http\Controllers\GoGlobalTravel;


class MakeRequest
{

    /**
     * @var string $requestType
     */
    protected $requestType = null;

    /**
     * @var string $xmlRequest
     */
    protected $xmlRequest = null;

    /**
     * @param string $requestType
     * @param string $xmlRequest
     */
    public function __construct($requestType, $xmlRequest)
    {
        $this->requestType = $requestType;
        $this->xmlRequest = $xmlRequest;
    }

    /**
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     * @return MakeRequest
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;
        return $this;
    }

    /**
     * @return string
     */
    public function getXmlRequest()
    {
        return $this->xmlRequest;
    }

    /**
     * @param string $xmlRequest
     * @return MakeRequest
     */
    public function setXmlRequest($xmlRequest)
    {
        $this->xmlRequest = $xmlRequest;
        return $this;
    }

}
