<?php
namespace FoodOrders;

use Timestamps\Timestamp;
use FoodItems\FoodItem;

class FoodOrder {
    private array $items = [];
    private Timestamp $orderTime;

    public function __construct(array $items){
        $this->items;
        $this->orderTime = new Timestamp();
    }

    public function getItems(): array {
        return $this->items;
    }

    public function getOrderTime(): Timestamp {
        return $this->orderTime;
    }
}