<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\ConceptualExample\Contracts;

interface Builder
{
    public function buildPartA() : void;
    public function buildPartB() : void;
    public function buildPartC() : void;
}
