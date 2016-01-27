<?php

class ArrayOfSmallParcel implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SmallParcel[] $SmallParcel
     */
    protected $SmallParcel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SmallParcel[]
     */
    public function getSmallParcel()
    {
      return $this->SmallParcel;
    }

    /**
     * @param SmallParcel[] $SmallParcel
     * @return ArrayOfSmallParcel
     */
    public function setSmallParcel(array $SmallParcel = null)
    {
      $this->SmallParcel = $SmallParcel;
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
      return isset($this->SmallParcel[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SmallParcel
     */
    public function offsetGet($offset)
    {
      return $this->SmallParcel[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SmallParcel $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SmallParcel[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SmallParcel[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SmallParcel Return the current element
     */
    public function current()
    {
      return current($this->SmallParcel);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SmallParcel);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SmallParcel);
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
      reset($this->SmallParcel);
    }

    /**
     * Countable implementation
     *
     * @return SmallParcel Return count of elements
     */
    public function count()
    {
      return count($this->SmallParcel);
    }

}
