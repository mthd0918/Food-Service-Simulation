<?php

namespace FoodItems;

class Spaghetti extends FoodItems {
    public function __construct() {
        parent::__construct(
            "Spaghetti",
            "This is Spaghetti",
            12.0,
            8
        );
    }
}