<?php

namespace OOP_basis;

class Film extends Product
{
    public function __construct($productName, $purchasePrice, $VAT, $description)
    {
        parent:: __construct($productName, $purchasePrice, $VAT, $description);
    }

}