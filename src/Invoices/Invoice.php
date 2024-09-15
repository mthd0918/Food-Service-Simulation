<?php
namespace Invoices;

use Timestamps\Timestamp;

class Invoice {
    protected float $finalPrice;
    protected Timestamp $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct() {
        $this->finalPrice = 0;
        $this->orderTime = new Timestamp();
        $this->estimatedTimeInMinutes = 0;
    }

    public function getFinalPrice(float $price): float {
        $this->finalPrice += $price;
        return $this->finalPrice;
    }

    public function addPrice(float $price): float {
        $this->finalPrice += $price;
        return $this->finalPrice;
    }

    public function getOrderTime(): Timestamp {
        return $this->orderTime;
    }

    public function addEstimatedTimeInMinutes(int $estimatedTPreparedMinutes): int {
        $this->estimatedTimeInMinutes += $estimatedTPreparedMinutes;
        return $this->estimatedTimeInMinutes;
    }

    public function printInvoice(): void {
        $date = $this->orderTime->getTimestamp();
        $line = str_repeat('-', 30);

        printf(
            "%s\nDate: %s\nFinal Price: $%.2f\n%s\n",
            $line,
            $date,
            $this->finalPrice,
            $line
        );
    }
}