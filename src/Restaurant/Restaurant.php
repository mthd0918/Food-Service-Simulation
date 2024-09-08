<?php

namespace Restaurants;

use FoodOrders\FoodOrder;
use Persons\Employees\Employee;

class Restaurant {
    private FoodOrder $menu = [];
    private Employee $employees = []; 
}
