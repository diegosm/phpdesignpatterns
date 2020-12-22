<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\TCPConnectionExample;

class Transmit implements TCPState
{
    public function handle(): string
    {
        return "Transmitting";
    }
}