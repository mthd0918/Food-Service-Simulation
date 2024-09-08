<?php
namespace Invoices\Invoice;

use Timestamps\Timestamp;

class Invoice {
    protected float $finalPrice;
    protected Timestamp $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, Timestamp $orderTime) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
    }

    public function setFinalPrice() {
        return $this->finalPrice;
    }

    public function setOrderTime() {
        return $this->orderTime;
    }
}