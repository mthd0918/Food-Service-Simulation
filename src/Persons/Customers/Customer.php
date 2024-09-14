<?php
namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person {
    protected array $interestedTastesMap;

    public function __construct(string $name, int $age, string $address, array $interestedTastesMap) {
        parent::__construct(
            $name,
            $age,
            $address);
        $this->interestedTastesMap = $interestedTastesMap;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        $order = [];
        $menu = $restaurant->getMenu()->getItems();

        foreach ($this->interestedTastesMap as $foodItem => $quantity) {
            if (in_array($foodItem, $menu)) {
                $order[$foodItem] = $quantity;
            }
        }

        return $order;  
    }
}