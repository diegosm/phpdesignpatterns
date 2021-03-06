<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Builders;

use DesignPatterns\Creational\Builder\SandwichExample\Breads\Beet;
use DesignPatterns\Creational\Builder\SandwichExample\Cheese\Cheddar;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\Builder;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\ProductInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Hamburgers\Vegan;
use DesignPatterns\Creational\Builder\SandwichExample\Products\Product;

class CheddarVeganBurger implements Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function addBread(): void
    {
        $this->product->addBread(
            new Beet()
        );
    }

    public function addHamburger(): void
    {
        $this->product->addHamburger(
            new Vegan()
        );
    }

    public function addCheese(): void
    {
        $this->product->addCheese(
            new Cheddar()
        );
    }

    public function getProduct(): ProductInterface
    {
        return $this->product;
    }
}
