<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Hats;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\HatInterface;

class Firefighter implements HatInterface
{
    public function getName(): string
    {
        return "Firefighter";
    }
}
