<?php
namespace Persons\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;
use Invoices\Invoice\Invoice;

class Casher extends Employee {
    public function __construct(int $employeeId, float $salary) {
        parent::__construct($employeeId, $salary);
    }

    /**
     * + generateOrder
     * 
     * @param array categories, Restaurant restaurant
     * @return FoodOrder
     */

    /**
     * + generateInvoice
     * 
     * @param FoodOrder order
     * @return Invoice
     */
}