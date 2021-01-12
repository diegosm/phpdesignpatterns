<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Cheese;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\CheeseInterface;

class Cheddar implements CheeseInterface
{
    public function getName(): string
    {
        return "Cheddar Cheese";
    }
}
