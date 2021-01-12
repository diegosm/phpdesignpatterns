<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\SandwichExample\Directors;

use DesignPatterns\Creational\Builder\SandwichExample\Contracts\Builder;

class Director
{
    private Builder $builder;

    public function setBuilder(Builder $builder) : void
    {
        $this->builder = $builder;
    }

    public function build() : void
    {
        $this->builder->addBread();
        $this->builder->addHamburger();
        $this->builder->addCheese();
    }
}
