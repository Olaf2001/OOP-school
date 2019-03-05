<?php

namespace OOP_basis;

class ProductList
{
    private $products = [];

    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        $print = "";

        foreach ($this->products as $product)
        {
            $print .= $product->getProduct()."<br>";
        }

        return '<table border="1">
                    <tr>
                        <th>Product Naam</th>
                        <th>Verkoopprijs</th>
                        <th>Categorie</th>'
                    .$print.
                '</table>';
    }
}
