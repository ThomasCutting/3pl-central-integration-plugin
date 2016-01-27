<?php

class UserLoginData
{

    /**
     * @var int $ThreePLID
     */
    protected $ThreePLID = null;

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param int $ThreePLID
     */
    public function __construct($ThreePLID)
    {
      $this->ThreePLID = $ThreePLID;
    }

    /**
     * @return int
     */
    public function getThreePLID()
    {
      return $this->ThreePLID;
    }

    /**
     * @param int $ThreePLID
     * @return UserLoginData
     */
    public function setThreePLID($ThreePLID)
    {
      $this->ThreePLID = $ThreePLID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return UserLoginData
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return UserLoginData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
