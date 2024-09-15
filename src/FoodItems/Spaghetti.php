<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem {
    public function __construct() {
        parent::__construct(
            $name = "Spaghetti",
            $description = "This is Spaghetti",
            $price = 10.0,
            $preparationTime = 6
        );
    }
}