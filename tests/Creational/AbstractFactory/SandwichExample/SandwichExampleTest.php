<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory\SandwichExample;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Factories\CheddarVeganBurgerFactory;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Factories\ChickenCheeseBurgerFactory;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\BreadInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\CheeseInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\HamburgerInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\SandwichAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Factories\DoubleBurgerFactory;
use PHPUnit\Framework\TestCase;

class SandwichExampleTest extends TestCase
{
    public function dataProvider() : array
    {
        return [
            [
                new ChickenCheeseBurgerFactory()
            ],
            [
                new DoubleBurgerFactory()
            ],
            [
                new CheddarVeganBurgerFactory()
            ]
        ];
    }

    /**
     * @param SandwichAbstractFactory
     * @dataProvider dataProvider
     */
    public function testItCanCreateSandwiches($sandwichAbstractFactory)
    {
        $this->assertInstanceOf(BreadInterface::class, $sandwichAbstractFactory->createBread());
        $this->assertInstanceOf(HamburgerInterface::class, $sandwichAbstractFactory->createHamburger());
        $this->assertInstanceOf(CheeseInterface::class, $sandwichAbstractFactory->createCheese());
    }
}
