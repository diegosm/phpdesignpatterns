<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Builders;

use DesignPatterns\Creational\Builder\SandwichExample\Breads\Common;
use DesignPatterns\Creational\Builder\SandwichExample\Cheese\Mozzarella;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\Builder;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\ProductInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Hamburgers\Beef;
use DesignPatterns\Creational\Builder\SandwichExample\Products\Product;

class SimpleBurger implements Builder
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function addBread(): void
    {
        $this->product->addBread(
            new Common()
        );
    }

    public function addHamburger(): void
    {
        $this->product->addHamburger(
            new Beef()
        );
    }

    public function addCheese(): void
    {
        $this->product->addCheese(
            new Mozzarella()
        );
    }

    public function getProduct(): ProductInterface
    {
        return $this->product;
    }
}
