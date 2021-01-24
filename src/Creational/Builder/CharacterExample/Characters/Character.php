<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\CharacterExample\Characters;

use DesignPatterns\Creational\Builder\CharacterExample\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\HatInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\PantsInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\ShirtInterface;

class Character implements CharacterInterface
{
    private HatInterface $hat;

    private ShirtInterface $shirt;

    private PantsInterface $pants;

    public function setHat(HatInterface $hat): void
    {
        $this->hat = $hat;
    }

    public function getHat(): HatInterface
    {
        return $this->hat;
    }

    public function setShirt(ShirtInterface $shirt): void
    {
        $this->shirt = $shirt;
    }

    public function getShirt(): ShirtInterface
    {
        return $this->shirt;
    }

    public function setPants(PantsInterface $pants): void
    {
        $this->pants = $pants;
    }

    public function getPants(): PantsInterface
    {
        return $this->pants;
    }
}
