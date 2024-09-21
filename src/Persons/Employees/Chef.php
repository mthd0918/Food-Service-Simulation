<?php
namespace Persons\Employees;

use FoodOrders\FoodOrder;
use FoodItems\FoodItem;

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

        foreach ($foodOrder->getItems() as $item => $quantity) {
            $foodItem = $this->getFoodItemByName($item);
            if ($foodItem) {
                $itemPreparationTime = $foodItem->getPreparationTime();
                $preparationTime += $itemPreparationTime * $quantity;
                for ($i = 0; $i < $quantity; $i++) {
                    echo "{$this->name} was cooking {$item}.\n";
                }
            }
        }

        return "{$this->name} took {$preparationTime} minutes to cook.\n";
    }

    private function getFoodItemByName(string $item): ?FoodItem {
        $className = 'FoodItems\\' . $item;
        
        if (class_exists($className)) {
            return new $className();
        }
        
        return null;
    }
}