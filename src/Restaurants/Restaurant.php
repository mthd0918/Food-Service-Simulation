<?php

namespace Restaurants;

class Restaurant {
    private array $menu;
    private array $employees; 

    public function __construct(array $menu, array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array {
        return $this->menu;
    }
}
