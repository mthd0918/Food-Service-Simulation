<?php

namespace FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {
    public function __construct(string $name, string $description, float $price, int $preparationTime) {
        parent::__construct(
            $name = "HawaiianPizza",
            $description = "This is HawaiianPizza",
            $price = 20.0,
            $preparationTime = 8
        );
    }
}