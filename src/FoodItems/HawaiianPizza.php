<?php

namespace FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct(string $name, string $description,$price) {
        parent::__construct(
            $name = "HawaiianPizza",
            $description = "This is HawaiianPizza",
            $price = 20.0
        );
    }
}