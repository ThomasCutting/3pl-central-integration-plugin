<?php

class ItemMaterial
{

    /**
     * @var string $SKU
     */
    protected $SKU = null;

    /**
     * @var string $NonSKUMaterial
     */
    protected $NonSKUMaterial = null;

    /**
     * @var float $Qty
     */
    protected $Qty = null;

    /**
     * @param float $Qty
     */
    public function __construct($Qty)
    {
      $this->Qty = $Qty;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
      return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return ItemMaterial
     */
    public function setSKU($SKU)
    {
      $this->SKU = $SKU;
      return $this;
    }

    /**
     * @return string
     */
    public function getNonSKUMaterial()
    {
      return $this->NonSKUMaterial;
    }

    /**
     * @param string $NonSKUMaterial
     * @return ItemMaterial
     */
    public function setNonSKUMaterial($NonSKUMaterial)
    {
      $this->NonSKUMaterial = $NonSKUMaterial;
      return $this;
    }

    /**
     * @return float
     */
    public function getQty()
    {
      return $this->Qty;
    }

    /**
     * @param float $Qty
     * @return ItemMaterial
     */
    public function setQty($Qty)
    {
      $this->Qty = $Qty;
      return $this;
    }

}
