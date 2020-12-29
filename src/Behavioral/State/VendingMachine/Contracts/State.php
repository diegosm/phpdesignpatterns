<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\VendingMachine\Contracts;

interface State
{
    public function handle() : void;

    public function toString() : string;
}
