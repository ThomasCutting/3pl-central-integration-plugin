<?php

class ArrayOfExternalCustomer implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExternalCustomer[] $ExternalCustomer
     */
    protected $ExternalCustomer = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExternalCustomer[]
     */
    public function getExternalCustomer()
    {
      return $this->ExternalCustomer;
    }

    /**
     * @param ExternalCustomer[] $ExternalCustomer
     * @return ArrayOfExternalCustomer
     */
    public function setExternalCustomer(array $ExternalCustomer = null)
    {
      $this->ExternalCustomer = $ExternalCustomer;
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
      return isset($this->ExternalCustomer[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExternalCustomer
     */
    public function offsetGet($offset)
    {
      return $this->ExternalCustomer[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExternalCustomer $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ExternalCustomer[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ExternalCustomer[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExternalCustomer Return the current element
     */
    public function current()
    {
      return current($this->ExternalCustomer);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExternalCustomer);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExternalCustomer);
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
      reset($this->ExternalCustomer);
    }

    /**
     * Countable implementation
     *
     * @return ExternalCustomer Return count of elements
     */
    public function count()
    {
      return count($this->ExternalCustomer);
    }

}
