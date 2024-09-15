<?php
namespace Persons\Employees;

use Restaurants\Restaurant;
use FoodOrders\FoodOrder;
use Invoices\Invoice;

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

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder {
        echo "{$this->name} received the order.";
        $order = new FoodOrder($categories);
        return $order;
    }

    public function generateInvoice(FoodOrder $order): Invoice {
        $invoice = new Invoice($order->getOrderTime());

        echo "{$this->name} received the order.\n";
        foreach ($order->getItems() as $foodItems) {
            $invoice->addPrice($foodItems->getPrice());
        }

        echo "{$this->name} made the invoice.\n";

        return $invoice;
    }
}