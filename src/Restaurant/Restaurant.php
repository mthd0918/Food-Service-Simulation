<?php

namespace Restaurants;

use FoodOrders\FoodOrder;
use Persons\Employees\Employee;

class Restaurant {
    private FoodOrder $menu;
    private Employee $employees; 

    public function __construct(FoodOrder $menu, Employee $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }
}
