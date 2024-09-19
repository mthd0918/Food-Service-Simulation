<?php
namespace Persons\Customers;

use Persons\Person;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Customer extends Person {
    protected array $interestedTastesMap;

    public function __construct(string $name, int $age, string $address, array $interestedTastesMap) {
        parent::__construct($name, $age, $address);
        $this->interestedTastesMap = $interestedTastesMap;
    }

    /**
     * Summary of order
     * 興味のある料理と注文を出力
     * 
     * # 処理の概要
     * Customer: 注文スタート
     * -> Cashier: 合計金額の計算、請求書の作成
     * -> Chef: 調理と調理時間の表示
     * -> Cashier: 請求書の発行
     * -> Invoice: 請求書の発行時間と合計金額の表示
     * 
     * @param \Restaurants\Restaurant $restaurant
     * @return \Invoices\Invoice
     * 
     * ?? 参考のクラス図には$categoriesが引数として取られている
     */
    public function order(Restaurant $restaurant): Invoice {
        $this->printInterestedCategories($this->interestedTastesMap);
        $order = $this->interestedCategories($restaurant);
        $this->printOrder($order);
        
        return $restaurant->order($order);
    }

    /**
     * Summary of interestedCategories
     * メニューの中から興味のある料理をリストへ格納
     * 
     * @param \Restaurants\Restaurant $restaurant
     * @return array
     */
    public function interestedCategories(Restaurant $restaurant): array {
        $order = [];
        $menu = $restaurant->getMenuCategories();

        foreach ($this->interestedTastesMap as $foodItem => $quantity) {
            if (in_array($foodItem, $menu)) {
                $order[$foodItem] = $quantity;
            }
        }

        return $order;
    }

    /**
     * Summary of printInterestedCategories
     * 興味のある料理を表示
     * 
     * @param array $interestedTastesMap
     * @return void
     */
    protected function printInterestedCategories(array $interestedTastesMap): void {
        echo "{$this->name} wanted to eat " . implode(", ", array_keys($interestedTastesMap)) . ".\n";
    }

    /**
     * Summary of printOrder
     * 注文した料理の表示
     * 
     * @param array $order
     * @return void
     */
    protected function printOrder(array $order): void {
        $orderItems = array_map(fn($item, $quantity) => "{$item} x {$quantity}", array_keys($order), $order);
        $orderString = implode(", ", $orderItems);
        echo "{$this->name} was looking at the menu, and ordered {$orderString}.\n";
    }
}