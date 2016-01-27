<?php

class ArrayOfOrderItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderItem[] $OrderItem
     */
    protected $OrderItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItem()
    {
      return $this->OrderItem;
    }

    /**
     * @param OrderItem[] $OrderItem
     * @return ArrayOfOrderItem
     */
    public function setOrderItem(array $OrderItem = null)
    {
      $this->OrderItem = $OrderItem;
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
      return isset($this->OrderItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderItem
     */
    public function offsetGet($offset)
    {
      return $this->OrderItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->OrderItem[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderItem Return the current element
     */
    public function current()
    {
      return current($this->OrderItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderItem);
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
      reset($this->OrderItem);
    }

    /**
     * Countable implementation
     *
     * @return OrderItem Return count of elements
     */
    public function count()
    {
      return count($this->OrderItem);
    }

}
