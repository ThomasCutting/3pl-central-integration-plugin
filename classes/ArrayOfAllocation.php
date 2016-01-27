<?php

class ArrayOfAllocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Allocation[] $Allocation
     */
    protected $Allocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Allocation[]
     */
    public function getAllocation()
    {
      return $this->Allocation;
    }

    /**
     * @param Allocation[] $Allocation
     * @return ArrayOfAllocation
     */
    public function setAllocation(array $Allocation = null)
    {
      $this->Allocation = $Allocation;
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
      return isset($this->Allocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Allocation
     */
    public function offsetGet($offset)
    {
      return $this->Allocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Allocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Allocation[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Allocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Allocation Return the current element
     */
    public function current()
    {
      return current($this->Allocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Allocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Allocation);
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
      reset($this->Allocation);
    }

    /**
     * Countable implementation
     *
     * @return Allocation Return count of elements
     */
    public function count()
    {
      return count($this->Allocation);
    }

}
