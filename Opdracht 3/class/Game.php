<?php

namespace OOP_basis;

class Game extends Product
{
    public function __construct($productName, $purchasePrice, $VAT, $description)
    {
        parent:: __construct($productName, $purchasePrice, $VAT, $description);
    }
    
}