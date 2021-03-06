<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\VendingMachine\States;

use DesignPatterns\Behavioral\State\VendingMachine\Contracts\State;
use DesignPatterns\Behavioral\State\VendingMachine\VendingMachine;

class VendingWaitingDepositState implements State
{
    private VendingMachine $vendingMachine;

    public function __construct(VendingMachine $vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function handle(): void
    {
        $this->vendingMachine->setCurrentState(
            new VendingRunningInStockState(
                $this->vendingMachine
            )
        );
    }

    public function toString(): string
    {
        return "Waiting deposit state.";
    }
}
