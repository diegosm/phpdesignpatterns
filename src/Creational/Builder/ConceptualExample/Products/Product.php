<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\ConceptualExample\Products;

class Product
{
    private array $parts = [];
    
    public function addPart(string $part) : void
    {
        $this->parts[] = $part;
    }

    public function getParts() : array
    {
        return $this->parts;
    }
}
