<?php

namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {
    protected int $preparationTime;

    public function __construct() {
        parent::__construct(
            $name = "HawaiianPizza",
            $description = "This is HawaiianPizza",
            $price = 20.0,
        );
        $this->preparationTime = 7;
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