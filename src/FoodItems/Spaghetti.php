<?php

namespace FoodItems\FoodItem;

class Spaghetti extends FoodItem {
    public function __construct(string $name, string $description, float $price, int $preparationTime) {
        parent::__construct(
            $name = "Spaghetti",
            $description = "This is Spaghetti",
            $price = 10.0,
            $preparationTime = 6
        );
    }
}