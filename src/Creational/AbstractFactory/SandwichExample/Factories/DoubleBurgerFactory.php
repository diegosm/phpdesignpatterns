<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Factories;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Breads\Common;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Cheese\Mozzarella;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\BreadInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\CheeseInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\SandwichAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\HamburgerInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Hamburgers\Beef;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Hamburgers\Chicken;

class DoubleBurgerFactory extends SandwichAbstractFactory
{
    public function createBread(): BreadInterface
    {
        return new Common();
    }

    public function createHamburger(): HamburgerInterface
    {
        return new Beef();
    }

    public function createCheese(): CheeseInterface
    {
        return new Mozzarella();
    }
}


