<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\SandwichExample\Breads;

use DesignPatterns\Creational\AbstractFactory\SandwichExample\Contracts\BreadInterface;

class Common implements BreadInterface
{
    public function getName(): string
    {
        return "Common default bread";
    }
}
