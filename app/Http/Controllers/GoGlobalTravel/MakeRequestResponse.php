<?php


namespace App\Http\Controllers\GoGlobalTravel;


class MakeRequestResponse
{
    /**
     * @var string $MakeRequestResult
     */
    protected $MakeRequestResult = null;

    /**
     * @param string $MakeRequestResult
     */
    public function __construct($MakeRequestResult)
    {
        $this->MakeRequestResult = $MakeRequestResult;
    }

    /**
     * @return string
     */
    public function getMakeRequestResult()
    {
        return $this->MakeRequestResult;
    }

    /**
     * @param string $MakeRequestResult
     * @return MakeRequestResponse
     */
    public function setMakeRequestResult($MakeRequestResult)
    {
        $this->MakeRequestResult = $MakeRequestResult;
        return $this;
    }

}
