<?php

class ArrayOfItemMaterial implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ItemMaterial[] $ItemMaterial
     */
    protected $ItemMaterial = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemMaterial[]
     */
    public function getItemMaterial()
    {
      return $this->ItemMaterial;
    }

    /**
     * @param ItemMaterial[] $ItemMaterial
     * @return ArrayOfItemMaterial
     */
    public function setItemMaterial(array $ItemMaterial = null)
    {
      $this->ItemMaterial = $ItemMaterial;
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
      return isset($this->ItemMaterial[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ItemMaterial
     */
    public function offsetGet($offset)
    {
      return $this->ItemMaterial[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ItemMaterial $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ItemMaterial[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ItemMaterial[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ItemMaterial Return the current element
     */
    public function current()
    {
      return current($this->ItemMaterial);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ItemMaterial);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ItemMaterial);
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
      reset($this->ItemMaterial);
    }

    /**
     * Countable implementation
     *
     * @return ItemMaterial Return count of elements
     */
    public function count()
    {
      return count($this->ItemMaterial);
    }

}
