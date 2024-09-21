<?php

namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {

    public function __construct(){
        parent::__construct(
            "CheeseBurger",
            "This is Cheese Burger",
            10.0,
            5
        );
    }

    public function getCategory(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getPreparationTime(): int {
        return $this->preparationTime;
    }
}