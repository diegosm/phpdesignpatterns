<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Directors;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\BuilderInterface;

class Director
{
    private BuilderInterface $builder;

    public function setBuilder(BuilderInterface $builder) : void
    {
        $this->builder = $builder;
    }

    public function build() : void
    {
        $this->builder->setHat();
        $this->builder->setPants();
        $this->builder->setShirt();
    }
}
