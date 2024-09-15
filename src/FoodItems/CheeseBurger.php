<?php

namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    public function __construct(){
        parent::__construct(
            $name = "Cheese Burger",
            $description = "This is Cheese Burger",
            $price = 10.0,
            $preparationTime = 5
        );
    }
}