<?php

namespace OOP_basis;

class ProductList
{
    private $productList = [];

    public function addProductToList($products)
    {
        $this->products[] = $products;
    }

    public function getProductList()
    {      
        foreach($this->products as $key => $values[])
        {
            $allProducts[$key] = '<tr>
                                <td>'.$values[1].'</td>
                                <td>'.$values[2].'</td>
                                <td>'.$values[3].'</td>
                            <tr>';
        }

        return '<table border = "1">
                    <tr>
                        <th>Product naam</th>
                        <th>Verkoopprijs</th>
                        <th>Categorie</th>
                    </tr>'
                    .$allProducts[$key].
                '</table>';
    }
}