<?php

namespace OOP_basis;

class Film extends Product
{
    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'film';
    }
}