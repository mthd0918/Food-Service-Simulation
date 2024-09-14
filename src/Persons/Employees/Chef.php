<?php
namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct(
            $name,
            $age,
            $address,
            $employeeId,
            $salary
        );
    }

    public function prepareFood(FoodOrder $foodOrder): int {
        $foodItems = $foodOrder->getItems();
        $prepareTime = 0;

        foreach ($foodItems as $foodItem) {
            echo "{$this->name} was cooking {$foodItem}.";
            $prepareTime += $foodItem->getPreparationTime();
        }

        echo "{$this->name} took {$prepareTime} minutes to cook.";

        return $prepareTime;
    }
}