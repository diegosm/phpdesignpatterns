<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Hamburgers;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\HamburgerInterface;

class Chicken implements HamburgerInterface
{
    public function getName(): string
    {
        return "Chicken Hamburger";
    }
}
