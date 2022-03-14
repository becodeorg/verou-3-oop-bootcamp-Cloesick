<?php

class Product
{
    public string $name;
    public float $price;
    public int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function totalPrice(): float
    {
        return $this->amount * $this->price;
    }

}