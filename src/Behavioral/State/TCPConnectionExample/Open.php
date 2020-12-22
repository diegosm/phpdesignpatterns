<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\TCPConnectionExample;

class Open implements TCPState
{
    public function handle(): string
    {
        return "Connection open";
    }
}