<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\TCPConnectionExample;

class TCPConnection
{
    private TCPState $tcpState;

    public function __construct()
    {
        $this->tcpState = new Open();
    }

    public function handle() : string
    {
        return $this->tcpState->handle();
    }

    public function getTcpState(): TCPState
    {
        return $this->tcpState;
    }

    public function setTcpState(TCPState $tcpState): void
    {
        $this->tcpState = $tcpState;
    }
}
