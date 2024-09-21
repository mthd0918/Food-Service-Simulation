<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Fettuccine extends FoodItem {
    protected int $preparationTime;

    public function __construct() {
        parent::__construct(
            "Fettuccine",
            "This is Focaccia",
            12.0,
        );
        $this->preparationTime = 6;
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