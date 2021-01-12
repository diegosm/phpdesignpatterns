<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Hamburgers;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\HamburgerInterface;

class Beef implements HamburgerInterface
{
    public function getName(): string
    {
        return "Beef Hamburger";
    }
}
