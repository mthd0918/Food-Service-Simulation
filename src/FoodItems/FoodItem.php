<?php
namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected float $price;
    protected int $preparationTime;

    public function __construct(string $name, string $description, float $price, int $preparationTime) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->preparationTime = $preparationTime;
    }

    public function getCategory(): string {
        return $this->name;
    }

    public function getPreparationTimeInMinutes(): int {
        return $this->preparationTime;
    }
}