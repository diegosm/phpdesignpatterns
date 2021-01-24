<?php

declare(strict_types=1);

namespace Tests\Creational\Builder\CharacterExample;

use DesignPatterns\Creational\Builder\CharacterExample\Builders\CharacterOne;
use DesignPatterns\Creational\Builder\CharacterExample\Builders\CharacterTwo;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\CharacterInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\HatInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\PantsInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Contracts\ShirtInterface;
use DesignPatterns\Creational\Builder\CharacterExample\Directors\Director;
use PHPUnit\Framework\TestCase;

class CharacterExampleTest extends TestCase
{
    public function dataProvider() : array
    {
        return [
            [
                new CharacterOne()
            ],
            [
                new CharacterTwo()
            ]
        ];
    }

    /**
     * @dataProvider dataProvider
     * @param CharacterInterface $character
     */
    public function testItCanBuildCharacters($character)
    {
        $director = new Director();
        $director->setBuilder($character);
        $director->build();

        $built = $character->getCharacter();

        $this->assertInstanceOf(HatInterface::class, $built->getHat());
        $this->assertInstanceOf(PantsInterface::class, $built->getPants());
        $this->assertInstanceOf(ShirtInterface::class, $built->getShirt());
    }

    public function testItCanBuildAndValidateNames()
    {
        $character = new CharacterOne();
        $director = new Director();
        $director->setBuilder($character);
        $director->build();

        $built = $character->getCharacter();

        $this->assertEquals('Cap', $built->getHat()->getName());
        $this->assertEquals('Shorts', $built->getPants()->getName());
        $this->assertEquals('Shirt', $built->getShirt()->getName());
    }
}
