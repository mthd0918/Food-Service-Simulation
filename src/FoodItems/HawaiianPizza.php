<?php

namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {
    public function __construct() {
        parent::__construct(
            $name = "HawaiianPizza",
            $description = "This is HawaiianPizza",
            $price = 20.0,
            $preparationTime = 8
        );
    }
}