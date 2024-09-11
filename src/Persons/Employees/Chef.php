<?php
namespace Persons\Employees;

class Chef extends Employee {
    public function __construct(int $employeeId, float $salary) {
        parent::__construct($employeeId, $salary);
    }

    /**
     * + prepareFood
     * 
     * @param FoodOrder
     * @return string
     */
}