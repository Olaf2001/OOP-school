<?php

namespace OOP_basis;

 // abstract
class Product
{
    private $product;

    public function __construct($product)
    {
        $this->product = $product;
    }

    public function getProduct()
    {
        return $this->product;
    }
}