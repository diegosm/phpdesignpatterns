<?php

declare(strict_types=1);

namespace Tests\Creational\Builder\SandwichExample;

use DesignPatterns\Creational\Builder\SandwichExample\Builders\CheddarVeganBurger;
use DesignPatterns\Creational\Builder\SandwichExample\Builders\ChickenCheeseBurger;
use DesignPatterns\Creational\Builder\SandwichExample\Builders\SimpleBurger;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\BreadInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\CheeseInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Contracts\HamburgerInterface;
use DesignPatterns\Creational\Builder\SandwichExample\Directors\Director;
use DesignPatterns\Creational\Builder\SandwichExample\Products\Product;
use PHPUnit\Framework\TestCase;

class SandwichExampleTest extends TestCase
{
    public function dataProvider() : array
    {
        return [
            [
                new ChickenCheeseBurger()
            ],
            [
                new SimpleBurger()
            ],
            [
                new CheddarVeganBurger()
            ]
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param Product $product
     */
    public function testItCanBuildSandwiches($product)
    {
        $director = new Director();
        $director->setBuilder($product);
        $director->build();

        $mountedProduct = $product->getProduct()->show();

        $this->assertInstanceOf(BreadInterface::class, $mountedProduct['bread']);
        $this->assertInstanceOf(HamburgerInterface::class, $mountedProduct['hamburger']);
        $this->assertInstanceOf(CheeseInterface::class, $mountedProduct['cheese']);
    }
}
