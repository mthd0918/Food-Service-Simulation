<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Margherita extends FoodItem {
    public function __construct() {
        parent::__construct(
            $name = "Margherita",
            $description = "This is Margherita",
            $price = 10.0,
            $preparationTime = 6
        );
    }
}