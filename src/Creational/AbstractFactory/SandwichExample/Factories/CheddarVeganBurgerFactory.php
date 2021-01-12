<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Factories;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Breads\Beet;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Cheese\Cheddar;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\BreadInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\CheeseInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\HamburgerInterface;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\SandwichAbstractFactory;
use DesignPatterns\Creational\AbstractFactory\SandwichExample\Hamburgers\Vegan;

class CheddarVeganBurgerFactory extends SandwichAbstractFactory
{
    public function createBread(): BreadInterface
    {
        return new Beet();
    }

    public function createHamburger(): HamburgerInterface
    {
        return new Vegan();
    }

    public function createCheese(): CheeseInterface
    {
        return new Cheddar();
    }
}
