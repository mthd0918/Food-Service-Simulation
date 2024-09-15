<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Fettuccine extends FoodItem {
    public function __construct() {
        parent::__construct(
            $name = "Fettuccine",
            $description = "This is Focaccia",
            $price = 12.0,
            $preparationTime = 5
        );
    }
}