<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Builders;

use DesignPatterns\Creational\Builder\CharacterExample\Characters\Character;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\BuilderInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Hats\Firefighter;
use DesignPatterns\Creational\Builder\CharacterExample\Pants\Cargo;
use DesignPatterns\Creational\Builder\CharacterExample\Shirts\Polo;

class CharacterTwo implements BuilderInterface
{
    private Character $character;

    public function __construct()
    {
        $this->character = new Character();
    }

    public function setHat(): void
    {
        $this->character->setHat(
            new Firefighter()
        );
    }

    public function setShirt(): void
    {
        $this->character->setShirt(
            new Polo()
        );
    }

    public function setPants(): void
    {
        $this->character->setPants(
            new Cargo()
        );
    }

    public function getCharacter(): CharacterInterface
    {
        return $this->character;
    }
}
