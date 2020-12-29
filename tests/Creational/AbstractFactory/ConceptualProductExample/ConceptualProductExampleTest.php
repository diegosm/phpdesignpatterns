<?php

declare(strict_types=1);

namespace Tests\Creational\AbstractFactory\ConceptualProductExample;

use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractFactory;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductA;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Contracts\AbstractProductB;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Factories\ConcreteFactory1;
use DesignPatterns\Creational\AbstractFactory\ConceptualProductExample\Factories\ConcreteFactory2;
use PHPUnit\Framework\TestCase;

class ConceptualProductExampleTest extends TestCase
{
    public function dataProvider() : array
    {
        return [
            [
                new ConcreteFactory1()
            ],
            [
                new ConcreteFactory2()
            ]
        ];
    }

    /**
     * @param AbstractFactory $concreteFactory
     * @dataProvider dataProvider
     */
    public function testItCanUseConcreteFactories(AbstractFactory $concreteFactory)
    {
        $this->assertInstanceOf(AbstractProductA::class, $concreteFactory->createProductA());
        $this->assertInstanceOf(AbstractProductB::class, $concreteFactory->createProductB());
    }
}
