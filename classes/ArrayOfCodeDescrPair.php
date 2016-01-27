<?php

class ArrayOfCodeDescrPair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CodeDescrPair[] $CodeDescrPair
     */
    protected $CodeDescrPair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CodeDescrPair[]
     */
    public function getCodeDescrPair()
    {
      return $this->CodeDescrPair;
    }

    /**
     * @param CodeDescrPair[] $CodeDescrPair
     * @return ArrayOfCodeDescrPair
     */
    public function setCodeDescrPair(array $CodeDescrPair = null)
    {
      $this->CodeDescrPair = $CodeDescrPair;
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
      return isset($this->CodeDescrPair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CodeDescrPair
     */
    public function offsetGet($offset)
    {
      return $this->CodeDescrPair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CodeDescrPair $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CodeDescrPair[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CodeDescrPair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CodeDescrPair Return the current element
     */
    public function current()
    {
      return current($this->CodeDescrPair);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CodeDescrPair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CodeDescrPair);
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
      reset($this->CodeDescrPair);
    }

    /**
     * Countable implementation
     *
     * @return CodeDescrPair Return count of elements
     */
    public function count()
    {
      return count($this->CodeDescrPair);
    }

}
