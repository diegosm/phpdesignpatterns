<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\TCPConnectionExample;

interface TCPState
{
    public function handle() : string;
}
