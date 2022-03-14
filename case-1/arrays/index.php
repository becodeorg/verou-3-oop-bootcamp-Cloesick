<?php

function pre($input)
{
    echo "<pre>";
    var_dump($input);
    echo "</pre>";
}

//A basket contains the following things:
// A basket contains the following things:
// - Banana's (6 pieces, costing €1 each)
// - Apples (3 pieces, costing €1.5 each)
// - Bottles of wine (2 bottles, costing €10 each)
$products = [
    [
        'name' => 'bananas',
        'volume' => 6,
        'price' => 1,
        'alcohol' => false
    ],
    [
        'name' => 'apples',
        'volume' => 3,
        'price' => 1.5,
        'alcohol' => false
    ],
    [
        'name' => 'wine bottles',
        'volume' => 2,
        'price' => 10,
        'alcohol' => true
    ]
];
// TODO: Calculate the total price

$prices = [];
$taxes = [];
foreach ($products as $product) {
    array_push($prices, $product['volume'] * $product['price']);
    if ($product['alcohol'] == false) {
        array_push($taxes, ($product['volume'] * $product['price']) * 0.06);
    } else {
        array_push($taxes, ($product['volume'] * $product['price']) * 0.21);
    }
}
pre($prices);
pre($taxes);
echo "The total price of the products is: €" . array_sum($prices);
echo "<br>";
// TODO: Calculate how much of the total price is tax (fruit= 6%, wine= 21%)
echo "The total paid taxes on the products is: €" . array_sum($taxes);

?>