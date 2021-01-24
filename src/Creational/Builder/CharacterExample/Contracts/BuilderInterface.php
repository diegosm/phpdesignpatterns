<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Contracts;

interface BuilderInterface
{
    public function setHat() : void;

    public function setShirt() : void;

    public function setPants() : void;

    public function getCharacter() : CharacterInterface;
}
