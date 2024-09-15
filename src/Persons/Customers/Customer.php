<?php
namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person {
    protected array $interestedTastesMap;

    public function __construct(string $name, int $age, string $address, array $interestedTastesMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTastesMap = $interestedTastesMap;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        $order = [];
        $menu = $restaurant->getMenu();

        foreach ($this->interestedTastesMap as $foodItem => $quantity) {
            if (in_array($foodItem, $menu)) {
                $order[$foodItem] = $quantity;
            }
        }

        return $order;
    }

    public function order(Restaurant $restaurant): Invoice {
        $this->printInterestedCategories($this->interestedTastesMap);
        
        $order = $this->interestedCategories($restaurant);
        $this->printOrder($order);
        
        return new Invoice();
    }

    protected function printInterestedCategories(array $interestedTastesMap): void {
        echo "{$this->name} wanted to eat " . implode(", ", array_keys($interestedTastesMap)) . ".\n";
    }

    protected function printOrder(array $order): void {
        $orderItems = array_map(fn($item, $quantity) => "{$item} x {$quantity}", array_keys($order), $order);
        $orderString = implode(", ", $orderItems);
        echo "{$this->name} was looking at the menu, and ordered {$orderString}.\n";
    }
}