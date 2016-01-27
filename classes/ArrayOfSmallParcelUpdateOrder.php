<?php

class ArrayOfSmallParcelUpdateOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SmallParcelUpdateOrder[] $SmallParcelUpdateOrder
     */
    protected $SmallParcelUpdateOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SmallParcelUpdateOrder[]
     */
    public function getSmallParcelUpdateOrder()
    {
      return $this->SmallParcelUpdateOrder;
    }

    /**
     * @param SmallParcelUpdateOrder[] $SmallParcelUpdateOrder
     * @return ArrayOfSmallParcelUpdateOrder
     */
    public function setSmallParcelUpdateOrder(array $SmallParcelUpdateOrder = null)
    {
      $this->SmallParcelUpdateOrder = $SmallParcelUpdateOrder;
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
      return isset($this->SmallParcelUpdateOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SmallParcelUpdateOrder
     */
    public function offsetGet($offset)
    {
      return $this->SmallParcelUpdateOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SmallParcelUpdateOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SmallParcelUpdateOrder[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SmallParcelUpdateOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SmallParcelUpdateOrder Return the current element
     */
    public function current()
    {
      return current($this->SmallParcelUpdateOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SmallParcelUpdateOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SmallParcelUpdateOrder);
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
      reset($this->SmallParcelUpdateOrder);
    }

    /**
     * Countable implementation
     *
     * @return SmallParcelUpdateOrder Return count of elements
     */
    public function count()
    {
      return count($this->SmallParcelUpdateOrder);
    }

}
