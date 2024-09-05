<?php

namespace FoodItems;

class HawaiianPizza extends FoodItems {
    public function __construct() {
        parent::__construct(
            "HawaiianPizza",
            "This is HawaiianPizza",
            20.0,
            12
        );
    }
}