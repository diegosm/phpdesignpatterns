<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Breads;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\BreadInterface;

class Common implements BreadInterface
{
    public function getName(): string
    {
        return "Common bread";
    }
}
