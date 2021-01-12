<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Contracts;

interface Builder
{
    public function addBread() : void;

    public function addHamburger() : void;

    public function addCheese() : void;

    public function getProduct() : ProductInterface;
}
