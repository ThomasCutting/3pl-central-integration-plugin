<?php

class ArrayOfCostInfoDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostInfoDetail[] $CostInfoDetail
     */
    protected $CostInfoDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostInfoDetail[]
     */
    public function getCostInfoDetail()
    {
      return $this->CostInfoDetail;
    }

    /**
     * @param CostInfoDetail[] $CostInfoDetail
     * @return ArrayOfCostInfoDetail
     */
    public function setCostInfoDetail(array $CostInfoDetail = null)
    {
      $this->CostInfoDetail = $CostInfoDetail;
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
      return isset($this->CostInfoDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostInfoDetail
     */
    public function offsetGet($offset)
    {
      return $this->CostInfoDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostInfoDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CostInfoDetail[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CostInfoDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostInfoDetail Return the current element
     */
    public function current()
    {
      return current($this->CostInfoDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostInfoDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostInfoDetail);
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
      reset($this->CostInfoDetail);
    }

    /**
     * Countable implementation
     *
     * @return CostInfoDetail Return count of elements
     */
    public function count()
    {
      return count($this->CostInfoDetail);
    }

}
