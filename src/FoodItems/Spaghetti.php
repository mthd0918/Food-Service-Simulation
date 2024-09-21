<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Spaghetti extends FoodItem {
    protected int $preparationTIme;

    public function __construct() {
        parent::__construct(
            "Spaghetti",
            "This is Spaghetti",
            10.0
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