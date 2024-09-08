<?php
namespace Persons\Employees;

class Chef extends Employee {
    public function __construct(int $employeeId, float $salary) {
        parent::__construct($employeeId, $salary);
    }

    // public function prepareFood(FoodOrder $foodOrder): string {

    // }
}