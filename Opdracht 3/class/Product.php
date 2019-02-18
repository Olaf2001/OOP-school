<?php

namespace OOP_basis;

abstract class Product
{
    private $productName;
    private $purchasePrice;
    private $VAT;
    private $description;

    public function __construct($productName, $purchasePrice, $VAT, $description)
    {
        $this->productName = $productName;
        $this->purchasePrice = $purchasePrice;
        $this->VAT = $VAT;
        $this->description = $description;
    }

    public function getBasicProduct()
    {
        return $this->productName. $this->purchasePrice. $this->VAT. $this->description;
    }

    abstract public function getProduct();
}