<?php

namespace FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct(string $name, string $description,$price) {
        parent::__construct(
            $name = "Spaghetti",
            $description = "This is Spaghetti",
            $price = 10.0
        );
    }
}