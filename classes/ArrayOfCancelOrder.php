<?php

class ArrayOfCancelOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelOrder[] $CancelOrder
     */
    protected $CancelOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelOrder[]
     */
    public function getCancelOrder()
    {
      return $this->CancelOrder;
    }

    /**
     * @param CancelOrder[] $CancelOrder
     * @return ArrayOfCancelOrder
     */
    public function setCancelOrder(array $CancelOrder = null)
    {
      $this->CancelOrder = $CancelOrder;
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
      return isset($this->CancelOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelOrder
     */
    public function offsetGet($offset)
    {
      return $this->CancelOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CancelOrder[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CancelOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelOrder Return the current element
     */
    public function current()
    {
      return current($this->CancelOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelOrder);
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
      reset($this->CancelOrder);
    }

    /**
     * Countable implementation
     *
     * @return CancelOrder Return count of elements
     */
    public function count()
    {
      return count($this->CancelOrder);
    }

}
