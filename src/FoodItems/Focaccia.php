<?php

namespace FoodItems\FoodItem;

class Focaccia extends FoodItem {
    public function __construct(string $name, string $description, float $price, int $preparationTime) {
        parent::__construct(
            $name = "Focaccia",
            $description = "This is Focaccia",
            $price = 12.0,
            $preparationTime = 5
        );
    }
}