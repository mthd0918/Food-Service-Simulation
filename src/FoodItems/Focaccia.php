<?php

namespace FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct(string $name, string $description,$price) {
        parent::__construct(
            $name = "Focaccia",
            $description = "This is Focaccia",
            $price = 12.0
        );
    }
}