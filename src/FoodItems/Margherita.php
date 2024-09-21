<?php

namespace FoodItems;

use FoodItems\FoodItem;

class Margherita extends FoodItem {
    protected int $preparationTIme;

    public function __construct() {
        parent::__construct(
            $name = "Margherita",
            $description = "This is Margherita",
            $price = 10.0
        );
        $this->preparationTIme = 8;
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