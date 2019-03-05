<?php

namespace OOP_basis;

abstract class Product
{
    private $productName;
    private $purchasePrice;
    private $earnPercentage;

    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        $this->productName = $productName;
        $this->purchasePrice = $purchasePrice;
        $this->earnPercentage = $earnPercentage;
        $this->VAT = 0.21 * $this->purchasePrice;
        $this->sellingPrice = $purchasePrice * ($this->earnPercentage / 100 + 1) + $this->VAT;    
    }

    public function getProduct()
    {
        return '<tr><td>'.$this->productName.'</td><td>'.$this->sellingPrice.'</td><td>'.$this->category;
    }
}