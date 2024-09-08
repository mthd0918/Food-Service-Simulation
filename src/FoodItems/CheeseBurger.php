<?php

namespace FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct(string $name, string $description,$price) {
        parent::__construct(
            $name = "Cheese Burger",
            $description = "This is Cheese Burger",
            $price = 10.0
        );
    }
}