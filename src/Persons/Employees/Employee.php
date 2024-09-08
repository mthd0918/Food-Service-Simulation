<?php
namespace Persons\Employees;

use Persons\Person;

class Employee extends Person {
    protected int $employeeId;
    protected float $salary;

    public function __construct(int $employeeId, float $salary) {
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }
}