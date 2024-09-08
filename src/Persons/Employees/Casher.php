<?php
namespace Persons\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;

class Casher extends Employee {
    public function __construct(int $employeeId, float $salary) {
        parent::__construct($employeeId, $salary);
    }

    // public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {

    // }
}