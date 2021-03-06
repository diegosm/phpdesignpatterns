<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Hamburgers;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\HamburgerInterface;

class Chicken implements HamburgerInterface
{
    public function getName(): string
    {
        return "Chicken Hamburger";
    }
}
