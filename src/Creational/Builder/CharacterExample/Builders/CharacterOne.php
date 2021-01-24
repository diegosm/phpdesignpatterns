<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Builders;

use DesignPatterns\Creational\Builder\CharacterExample\Characters\Character;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\BuilderInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Hats\Cap;
use DesignPatterns\Creational\Builder\CharacterExample\Pants\Shorts;
use DesignPatterns\Creational\Builder\CharacterExample\Shirts\Shirt;

class CharacterOne implements BuilderInterface
{
    private Character $character;

    public function __construct()
    {
        $this->character = new Character();
    }

    public function setHat(): void
    {
        $this->character->setHat(
            new Cap()
        );
    }

    public function setShirt(): void
    {
        $this->character->setShirt(
            new Shirt()
        );
    }

    public function setPants(): void
    {
        $this->character->setPants(
            new Shorts()
        );
    }

    public function getCharacter(): CharacterInterface
    {
        return $this->character;
    }
}
