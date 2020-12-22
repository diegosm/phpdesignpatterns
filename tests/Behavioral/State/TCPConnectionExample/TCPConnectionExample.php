<?php

declare(strict_types=1);

namespace Tests\Behavioral\State\TCPConnectionExample;

use DesignPatterns\Behavioral\State\TCPConnectionExample\Close;
use DesignPatterns\Behavioral\State\TCPConnectionExample\Open;
use DesignPatterns\Behavioral\State\TCPConnectionExample\TCPConnection;
use DesignPatterns\Behavioral\State\TCPConnectionExample\Transmit;
use PHPUnit\Framework\TestCase;

class TCPConnectionExample extends TestCase
{
    public function testItCanUseDifferentStates()
    {
        $tcp = new TCPConnection();

        $tcp->setTcpState(new Open());
        $this->assertEquals("Connection open", $tcp->handle());

        $tcp->setTcpState(new Transmit());
        $this->assertEquals("Transmitting", $tcp->handle());

        $tcp->setTcpState(new Close());
        $this->assertEquals("Close connection", $tcp->handle());
    }
}