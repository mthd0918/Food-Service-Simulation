<?php
namespace Persons\Customers;

use Persons\Person;

class Customer extends Person {
    public function __construct(string $name, int $age, string $address) {
        parent::__construct($name, $age, $address);
    }

    // public function interestedCategories(Restaurant $menu): array {

    // }

    // public function order(Restaurant $menu, array $categories): Invoice {

    // }
}