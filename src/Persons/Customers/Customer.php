<?php
namespace Persons\Customers;

use Persons\Person;

class Customer extends Person {
    public function __construct(string $name, int $age, string $address) {
        parent::__construct($name, $age, $address);
    }

    /**
    *  + interestedCategories()
    *
    *  @return array
    */

    /**
    *  + order()
    *  
    *  @param Restaurant menu, array categories
    *  @return Invoice
    */
}