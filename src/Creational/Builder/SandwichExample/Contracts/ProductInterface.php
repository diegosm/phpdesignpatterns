<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Contracts;

interface ProductInterface
{
    public function addBread(BreadInterface $bread) : void;

    public function addHamburger(HamburgerInterface $hamburger) : void;

    public function addCheese(CheeseInterface $cheese) : void;
}
