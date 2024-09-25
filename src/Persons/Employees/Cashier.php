<?php
namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Invoices\Invoice;
use Restaurants\Restaurant;

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

    /**
     * Summary of generateOrder
     * オーダー作成メッセージの表示
     * @param array $categories
     * @return \FoodOrders\FoodOrder
     */

    public function generateOrder(array $items): FoodOrder {
        echo "{$this->name} received the order.\n";
        $foodOrder = new FoodOrder($items);
        return $foodOrder;
    }
    
    /**
     * Summary of generateInvoice
     * 合計金額を計算し、請求書を作成
     * 
     * @param \FoodOrders\FoodOrder $foodOrder
     * @param \Restaurants\Restaurant $restaurant
     * @return \Invoices\Invoice
     */
    public function generateInvoice(FoodOrder $foodOrder, Restaurant $restaurant): Invoice {
        $finalPrice = 0.0;

        $menuPrice = $restaurant->getMenuPrice();
        $order = $foodOrder->getItems();

        foreach ($order as $item => $quantity) {
            if(isset($menuPrice[$item])) {
                $finalPrice += $menuPrice[$item] * $quantity;
            }
        }

        print_r($finalPrice);

        $invoice = new Invoice();
        $invoice->setFinalPrice($finalPrice);
        return $invoice;
    }
}