<?php

class ArrayOfPackageContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PackageContent[] $PackageContent
     */
    protected $PackageContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageContent[]
     */
    public function getPackageContent()
    {
      return $this->PackageContent;
    }

    /**
     * @param PackageContent[] $PackageContent
     * @return ArrayOfPackageContent
     */
    public function setPackageContent(array $PackageContent = null)
    {
      $this->PackageContent = $PackageContent;
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
      return isset($this->PackageContent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PackageContent
     */
    public function offsetGet($offset)
    {
      return $this->PackageContent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PackageContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PackageContent[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PackageContent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PackageContent Return the current element
     */
    public function current()
    {
      return current($this->PackageContent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PackageContent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PackageContent);
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
      reset($this->PackageContent);
    }

    /**
     * Countable implementation
     *
     * @return PackageContent Return count of elements
     */
    public function count()
    {
      return count($this->PackageContent);
    }

}
