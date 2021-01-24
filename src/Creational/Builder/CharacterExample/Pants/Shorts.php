<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Pants;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\PantsInterface;

class Shorts implements PantsInterface
{
    public function getName(): string
    {
        return "Shorts";
    }
}
