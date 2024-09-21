<?php

namespace FoodItems;

use FoodItems\FoodItem;

class HawaiianPizza extends FoodItem {

    public function __construct() {
        parent::__construct(
            "HawaiianPizza",
            "This is HawaiianPizza",
            20.0,
            7
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