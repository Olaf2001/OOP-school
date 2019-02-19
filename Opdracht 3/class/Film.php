<?php

namespace OOP_basis;

class Film extends Product
{
    public function __construct($productName, $purchasePrice, $earnPercentage)
    {
        parent::__construct($productName, $purchasePrice, $earnPercentage);

        $this->category = 'film';
    }

    public function getProduct()
    {
        return parent::getBasicProduct().
                '<td>'.$this->category.'</td>
                <tr>';
    }
}