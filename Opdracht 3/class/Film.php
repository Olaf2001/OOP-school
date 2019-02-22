<?php

namespace OOP_basis;

class Film extends Product
{
    private $productName;
    private $purchasePrice;
    private $earnPercentage;

    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'film';
    }

    public function getProduct()
    {
        return array($this->$productName. $this->sellingPrice .$this->category);
    }
}