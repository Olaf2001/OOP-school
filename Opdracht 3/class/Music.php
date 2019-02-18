<?php

namespace OOP_basis;

class Music extends Product
{
    public function __construct($productName, $purchasePrice, $VAT, $description)
    {
        parent::__construct($productName, $purchasePrice, $VAT, $description);
    }

    public function getProduct()
    {
        parent::getBasicProduct();

        return parent::getBasicProduct()->$this->productName;
    }
}