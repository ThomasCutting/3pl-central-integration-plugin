<?php

class ArrayOfItemFacilityStorageRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemFacilityStorageRate[] $ItemFacilityStorageRate
     */
    protected $ItemFacilityStorageRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemFacilityStorageRate[]
     */
    public function getItemFacilityStorageRate()
    {
      return $this->ItemFacilityStorageRate;
    }

    /**
     * @param ItemFacilityStorageRate[] $ItemFacilityStorageRate
     * @return ArrayOfItemFacilityStorageRate
     */
    public function setItemFacilityStorageRate(array $ItemFacilityStorageRate = null)
    {
      $this->ItemFacilityStorageRate = $ItemFacilityStorageRate;
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
      return isset($this->ItemFacilityStorageRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemFacilityStorageRate
     */
    public function offsetGet($offset)
    {
      return $this->ItemFacilityStorageRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemFacilityStorageRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemFacilityStorageRate[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemFacilityStorageRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemFacilityStorageRate Return the current element
     */
    public function current()
    {
      return current($this->ItemFacilityStorageRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemFacilityStorageRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemFacilityStorageRate);
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
      reset($this->ItemFacilityStorageRate);
    }

    /**
     * Countable implementation
     *
     * @return ItemFacilityStorageRate Return count of elements
     */
    public function count()
    {
      return count($this->ItemFacilityStorageRate);
    }

}
