<?php

declare(strict_types=1);

namespace Tests\Creational\Builder\ConceptualExample;

use DesignPatterns\Creational\Builder\ConceptualExample\Builders\ConcreteBuilderA;
use DesignPatterns\Creational\Builder\ConceptualExample\Builders\ConcreteBuilderB;
use DesignPatterns\Creational\Builder\ConceptualExample\Directors\Director;
use PHPUnit\Framework\TestCase;

class ConceptualExampleTest extends TestCase
{
    public function testItIsOurClientCode()
    {
        $director = new Director();
        $builderA = new ConcreteBuilderA();
        $builderB = new ConcreteBuilderB();

        $director->setBuilder($builderA);
        $director->build();

        $this->assertEquals(
            [
                'Part A.A.',
                'Part A.B.',
                'Part A.C.'
            ],
            $builderA->getProduct()->getParts()
        );

        $director->setBuilder($builderB);
        $director->build();

        $this->assertEquals(
            [
                'Part B.A.',
                'Part B.B.',
                'Part B.C.'
            ],
            $builderB->getProduct()->getParts()
        );
    }
}
