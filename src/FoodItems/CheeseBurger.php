<?php

namespace FoodItems;

use FoodItems\FoodItem;

class CheeseBurger extends FoodItem {
    protected int $preparationTime;

    public function __construct(){
        parent::__construct(
            "CheeseBurger",
            "This is Cheese Burger",
            10.0,
        );
        $this->preparationTime = 5;
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