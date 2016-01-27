<?php

class ArrayOfRetailer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Retailer[] $Retailer
     */
    protected $Retailer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Retailer[]
     */
    public function getRetailer()
    {
      return $this->Retailer;
    }

    /**
     * @param Retailer[] $Retailer
     * @return ArrayOfRetailer
     */
    public function setRetailer(array $Retailer = null)
    {
      $this->Retailer = $Retailer;
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
      return isset($this->Retailer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Retailer
     */
    public function offsetGet($offset)
    {
      return $this->Retailer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Retailer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Retailer[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Retailer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Retailer Return the current element
     */
    public function current()
    {
      return current($this->Retailer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Retailer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Retailer);
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
      reset($this->Retailer);
    }

    /**
     * Countable implementation
     *
     * @return Retailer Return count of elements
     */
    public function count()
    {
      return count($this->Retailer);
    }

}
