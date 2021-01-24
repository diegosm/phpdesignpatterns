<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Shirts;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\ShirtInterface;

class Shirt implements ShirtInterface
{
    public function getName(): string
    {
        return "Shirt";
    }
}
