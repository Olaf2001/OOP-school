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

    public function getName()
    {
        parent::getName();
    }
}