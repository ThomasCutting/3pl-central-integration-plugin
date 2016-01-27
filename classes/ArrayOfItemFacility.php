<?php

class ArrayOfItemFacility implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemFacility[] $ItemFacility
     */
    protected $ItemFacility = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemFacility[]
     */
    public function getItemFacility()
    {
      return $this->ItemFacility;
    }

    /**
     * @param ItemFacility[] $ItemFacility
     * @return ArrayOfItemFacility
     */
    public function setItemFacility(array $ItemFacility = null)
    {
      $this->ItemFacility = $ItemFacility;
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
      return isset($this->ItemFacility[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemFacility
     */
    public function offsetGet($offset)
    {
      return $this->ItemFacility[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemFacility $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemFacility[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemFacility[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemFacility Return the current element
     */
    public function current()
    {
      return current($this->ItemFacility);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemFacility);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemFacility);
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
      reset($this->ItemFacility);
    }

    /**
     * Countable implementation
     *
     * @return ItemFacility Return count of elements
     */
    public function count()
    {
      return count($this->ItemFacility);
    }

}
