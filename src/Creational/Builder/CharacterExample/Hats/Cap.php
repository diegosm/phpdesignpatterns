<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Hats;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\HatInterface;

class Cap implements HatInterface
{
    public function getName(): string
    {
        return "Cap";
    }
}
