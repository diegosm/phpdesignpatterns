<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\VendingMachine;

class VendingOutOfStockState implements State
{
    private VendingMachine $vendingMachine;

    public function __construct(VendingMachine $vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function handle(): void
    {
        //
    }

    public function toString(): string
    {
        return "Machine out of stock.";
    }
}