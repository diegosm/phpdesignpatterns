<?php

declare(strict_types=1);

namespace Tests\Behavioral\State\VendingMachine;

use DesignPatterns\Behavioral\State\VendingMachine\VendingMachine;
use PHPUnit\Framework\TestCase;

class VendingMachineTest extends TestCase
{
    public function testCanChangeStateAndDecrementMachineStock()
    {
        $ob = new VendingMachine(2);

        $ob->handle();
        $this->assertEquals("Running in stock state.", $ob->toString());

        $ob->handle();
        $this->assertEquals("Waiting deposit state.", $ob->toString());

        $ob->handle();
        $this->assertEquals("Running in stock state.", $ob->toString());

        $ob->handle();
        $this->assertEquals("Machine out of stock.", $ob->toString());
    }
}