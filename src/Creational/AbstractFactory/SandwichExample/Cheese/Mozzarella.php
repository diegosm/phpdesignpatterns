<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Cheese;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\CheeseInterface;

class Mozzarella implements CheeseInterface
{
    public function getName(): string
    {
        return "Mozzarella cheese";
    }
}
