<?php

class ArrayOfStockStatusEntry implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StockStatusEntry[] $StockStatusEntry
     */
    protected $StockStatusEntry = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StockStatusEntry[]
     */
    public function getStockStatusEntry()
    {
      return $this->StockStatusEntry;
    }

    /**
     * @param StockStatusEntry[] $StockStatusEntry
     * @return ArrayOfStockStatusEntry
     */
    public function setStockStatusEntry(array $StockStatusEntry = null)
    {
      $this->StockStatusEntry = $StockStatusEntry;
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
      return isset($this->StockStatusEntry[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StockStatusEntry
     */
    public function offsetGet($offset)
    {
      return $this->StockStatusEntry[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StockStatusEntry $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->StockStatusEntry[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->StockStatusEntry[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StockStatusEntry Return the current element
     */
    public function current()
    {
      return current($this->StockStatusEntry);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StockStatusEntry);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StockStatusEntry);
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
      reset($this->StockStatusEntry);
    }

    /**
     * Countable implementation
     *
     * @return StockStatusEntry Return count of elements
     */
    public function count()
    {
      return count($this->StockStatusEntry);
    }

}
