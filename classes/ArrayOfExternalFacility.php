<?php

class ArrayOfExternalFacility implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ExternalFacility[] $ExternalFacility
     */
    protected $ExternalFacility = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ExternalFacility[]
     */
    public function getExternalFacility()
    {
      return $this->ExternalFacility;
    }

    /**
     * @param ExternalFacility[] $ExternalFacility
     * @return ArrayOfExternalFacility
     */
    public function setExternalFacility(array $ExternalFacility = null)
    {
      $this->ExternalFacility = $ExternalFacility;
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
      return isset($this->ExternalFacility[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ExternalFacility
     */
    public function offsetGet($offset)
    {
      return $this->ExternalFacility[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ExternalFacility $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ExternalFacility[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ExternalFacility[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ExternalFacility Return the current element
     */
    public function current()
    {
      return current($this->ExternalFacility);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ExternalFacility);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ExternalFacility);
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
      reset($this->ExternalFacility);
    }

    /**
     * Countable implementation
     *
     * @return ExternalFacility Return count of elements
     */
    public function count()
    {
      return count($this->ExternalFacility);
    }

}
