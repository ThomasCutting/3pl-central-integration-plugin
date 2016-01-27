<?php

class ArrayOfOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Order[] $Order
     */
    protected $Order = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Order[]
     */
    public function getOrder()
    {
      return $this->Order;
    }

    /**
     * @param Order[] $Order
     * @return ArrayOfOrder
     */
    public function setOrder(array $Order = null)
    {
      $this->Order = $Order;
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
      return isset($this->Order[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Order
     */
    public function offsetGet($offset)
    {
      return $this->Order[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Order $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Order[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Order[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Order Return the current element
     */
    public function current()
    {
      return current($this->Order);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Order);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Order);
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
      reset($this->Order);
    }

    /**
     * Countable implementation
     *
     * @return Order Return count of elements
     */
    public function count()
    {
      return count($this->Order);
    }

}
