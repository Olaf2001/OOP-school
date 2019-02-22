<?php

namespace OOP_basis;

class Music extends Product
{
    private $productName;
    private $purchasePrice;
    private $earnPercentage;
    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'music';
    }

    public function getProduct()
    {
        return array($this->$productName. $this->sellingPrice .$this->category);
    }
}