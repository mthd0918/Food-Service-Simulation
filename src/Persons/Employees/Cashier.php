<?php
namespace Persons\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;

class Cashier extends Employee {
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary){
        parent::__construct(
            $name,
            $age,
            $address,
            $employeeId,
            $salary
        );
    }

    /**
     * Summary of generateOrder
     * オーダー作成メッセージの表示
     * @param array $categories
     * @param \Restaurants\Restaurant $restaurant
     * @return \FoodOrders\FoodOrder
     */

    public function generateOrder(array $items): FoodOrder {
        echo "{$this->name} received the order.\n";
        $foodOrder = new FoodOrder($items);
        return $foodOrder;
    }
}