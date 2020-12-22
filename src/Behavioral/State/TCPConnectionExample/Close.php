<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\TCPConnectionExample;

class Close implements TCPState
{
    public function handle(): string
    {
        return "Close connection";
    }
}