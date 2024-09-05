<?php

namespace FoodItems;

class Focaccia extends FoodItems {
    public function __construct() {
        parent::__construct(
            "Focaccia",
            "This is Focaccia",
            12.0,
            7
        );
    }
}