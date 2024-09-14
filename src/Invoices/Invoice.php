<?php
namespace Invoices;

use Timestamps\Timestamp;

class Invoice {
    protected float $finalPrice;
    protected Timestamp $orderTime;
    protected int $estimatedTimeInMinutes;

    public function __construct(Timestamp $orderTime) {
        $this->orderTime = $orderTime;
    }

    public function getFinalPrice(float $price): float {
        $this->finalPrice += $price;
        return $this->finalPrice;
    }

    public function addPrice(float $price): float {
        $this->finalPrice += $this->estimatedTimeInMinutes;
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
        $date = date('Y/m/d H:s', $this->orderTime->getTimestamp());
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