<?php

class ArrayOfRecurringBillingDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RecurringBillingDetail[] $RecurringBillingDetail
     */
    protected $RecurringBillingDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecurringBillingDetail[]
     */
    public function getRecurringBillingDetail()
    {
      return $this->RecurringBillingDetail;
    }

    /**
     * @param RecurringBillingDetail[] $RecurringBillingDetail
     * @return ArrayOfRecurringBillingDetail
     */
    public function setRecurringBillingDetail(array $RecurringBillingDetail = null)
    {
      $this->RecurringBillingDetail = $RecurringBillingDetail;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->RecurringBillingDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RecurringBillingDetail
     */
    public function offsetGet($offset)
    {
      return $this->RecurringBillingDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RecurringBillingDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->RecurringBillingDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->RecurringBillingDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RecurringBillingDetail Return the current element
     */
    public function current()
    {
      return current($this->RecurringBillingDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RecurringBillingDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RecurringBillingDetail);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->RecurringBillingDetail);
    }

    /**
     * Countable implementation
     *
     * @return RecurringBillingDetail Return count of elements
     */
    public function count()
    {
      return count($this->RecurringBillingDetail);
    }

}
