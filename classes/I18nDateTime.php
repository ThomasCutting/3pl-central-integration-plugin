<?php

class I18nDateTime
{

    /**
     * @var \DateTime $_
     */
    protected $_ = null;

    /**
     * @param \DateTime $_
     */
    public function __construct(\DateTime $_)
    {
      $this->_ = $_->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function get_()
    {
      if ($this->_ == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->_);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $_
     * @return I18nDateTime
     */
    public function set_(\DateTime $_)
    {
      $this->_ = $_->format(\DateTime::ATOM);
      return $this;
    }

}
