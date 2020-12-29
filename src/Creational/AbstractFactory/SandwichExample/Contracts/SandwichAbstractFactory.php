<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts;

abstract class SandwichAbstractFactory
{
    abstract public function createBread() : BreadInterface;
    abstract public function createHamburger() : HamburgerInterface;
    abstract public function createCheese() : CheeseInterface;
}
