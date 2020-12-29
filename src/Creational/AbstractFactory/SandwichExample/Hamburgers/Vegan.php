<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Hamburgers;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\HamburgerInterface;

class Vegan implements HamburgerInterface
{
    public function getName(): string
    {
        return "Vegan Hamburger";
    }
}
