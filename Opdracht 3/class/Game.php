<?php

namespace OOP_basis;

class Game extends Product
{
    private $productName;
    private $purchasePrice;
    private $earnPercentage;

    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'game';
    }

    public function getName()
    {
        parent::getName();
    }
    
}