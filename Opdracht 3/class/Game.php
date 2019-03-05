<?php

namespace OOP_basis;

class Game extends Product
{
    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'game';
    }
}