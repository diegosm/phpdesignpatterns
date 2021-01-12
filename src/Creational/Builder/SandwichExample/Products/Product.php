<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Products;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\BreadInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\CheeseInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\HamburgerInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\ProductInterface;

class Product implements ProductInterface
{
    protected array $data = [];

    public function show() : array
    {
        return $this->data;
    }

    public function addBread(BreadInterface $bread): void
    {
        $this->data['bread'] = $bread;
    }

    public function addHamburger(HamburgerInterface $hamburger): void
    {
        $this->data['hamburger'] = $hamburger;
    }

    public function addCheese(CheeseInterface $cheese): void
    {
        $this->data['cheese'] = $cheese;
    }
}
