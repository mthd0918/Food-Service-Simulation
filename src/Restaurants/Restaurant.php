<?php

namespace Restaurants;

use FoodItems\FoodItem;
use Invoices\Invoice;
use Persons\Employees\Cashier;
use Persons\Employees\Chef;

class Restaurant {
    private array $menu;
    private array $employees; 

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function order(array $order): Invoice {
        // Cashierの呼び出し、注文の作成
        $cashier = $this->getCashier();
        $foodOrder = $cashier->generateOrder($order);

        print_r($foodOrder);

        // Chefの呼び出し、料理の準備
        $chef = $this->getChef();
        $chef->prepareFood($foodOrder);

        $invoice = new Invoice();
        return $invoice;
    }

    public function getMenuCategories(): array {
        return array_map(function(FoodItem $item) {
            return $item->getCategory();
        }, $this->menu);
    }

    private function getCashier(): ?Cashier {
        foreach ($this->employees as $employee) {
            if ($employee instanceof Cashier) {
                return $employee;
            }
        }
        return null;
    }

    private function getChef(): ?Chef {
        foreach ($this->employees as $employee) {
            if ($employee instanceof Chef) {
                return $employee;
            }
            return null;
        }
    }
}
