<?php

class ArrayOfUpdateOrder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UpdateOrder[] $UpdateOrder
     */
    protected $UpdateOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UpdateOrder[]
     */
    public function getUpdateOrder()
    {
      return $this->UpdateOrder;
    }

    /**
     * @param UpdateOrder[] $UpdateOrder
     * @return ArrayOfUpdateOrder
     */
    public function setUpdateOrder(array $UpdateOrder = null)
    {
      $this->UpdateOrder = $UpdateOrder;
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
      return isset($this->UpdateOrder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UpdateOrder
     */
    public function offsetGet($offset)
    {
      return $this->UpdateOrder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UpdateOrder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UpdateOrder[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UpdateOrder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UpdateOrder Return the current element
     */
    public function current()
    {
      return current($this->UpdateOrder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UpdateOrder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UpdateOrder);
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
      reset($this->UpdateOrder);
    }

    /**
     * Countable implementation
     *
     * @return UpdateOrder Return count of elements
     */
    public function count()
    {
      return count($this->UpdateOrder);
    }

}
