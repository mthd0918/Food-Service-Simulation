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

    public function prepareFood(FoodOrder $foodOrder): string {
        $preparationTime = 0;

        foreach ($foodOrder->getItems() as $item) {
            echo "{$this->name} was cooking {$item}.\n";
        }

        return "{$this->name} took {$preparationTime} minutes to cook.\n";
    }
}