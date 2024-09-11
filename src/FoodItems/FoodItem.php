<?php
namespace FoodItems\FoodItem;

abstract class FoodItem {
    protected string $name;
    protected string $description;
    protected float $price;

    public function __construct(string $name, string $description, float $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getCategory(): string {
        return $this->name;
    }
}