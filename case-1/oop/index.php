<?php

require_once 'Product.php';

$banana = new Product('banana', 1, 6);
echo $banana->totalPrice();

$basket = [
    new Product('banana', 1, 6),
    new Product('apple', 1.5, 4),
    new Product('wine', 10, 1),
];

// TODO: foreach to check price

// Replaced by classes above
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