<?php

namespace FoodItems;

class CheeseBurger extends FoodItems
{
    public function __construct() {
        parent::__construct(
            "Cheese Burger",
            "This is Cheese Burger",
            10.0,
            5
        );
    }
}