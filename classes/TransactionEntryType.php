<?php

class TransactionEntryType
{

    /**
     * @var int $TransactionEntryTypeID
     */
    protected $TransactionEntryTypeID = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param int $TransactionEntryTypeID
     */
    public function __construct($TransactionEntryTypeID)
    {
      $this->TransactionEntryTypeID = $TransactionEntryTypeID;
    }

    /**
     * @return int
     */
    public function getTransactionEntryTypeID()
    {
      return $this->TransactionEntryTypeID;
    }

    /**
     * @param int $TransactionEntryTypeID
     * @return TransactionEntryType
     */
    public function setTransactionEntryTypeID($TransactionEntryTypeID)
    {
      $this->TransactionEntryTypeID = $TransactionEntryTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return TransactionEntryType
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
