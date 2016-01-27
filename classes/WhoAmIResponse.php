<?php

class WhoAmIResponse
{

    /**
     * @var string $WhoAmIResult
     */
    protected $WhoAmIResult = null;

    /**
     * @param string $WhoAmIResult
     */
    public function __construct($WhoAmIResult)
    {
      $this->WhoAmIResult = $WhoAmIResult;
    }

    /**
     * @return string
     */
    public function getWhoAmIResult()
    {
      return $this->WhoAmIResult;
    }

    /**
     * @param string $WhoAmIResult
     * @return WhoAmIResponse
     */
    public function setWhoAmIResult($WhoAmIResult)
    {
      $this->WhoAmIResult = $WhoAmIResult;
      return $this;
    }

}
