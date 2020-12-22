<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\VendingMachine;

class VendingRunningInStockState implements State
{
    private VendingMachine $vendingMachine;

    public function __construct(VendingMachine $vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function handle(): void
    {
        try {
            $this->vendingMachine->decrement();

            $this->vendingMachine->setCurrentState(
                new VendingWaitingDepositState($this->vendingMachine)
            );
        } catch (\Exception $exception) {
            $this->vendingMachine->setCurrentState(new VendingOutOfStockState($this->vendingMachine));
        }
    }

    public function toString(): string
    {
        return "Running in stock state.";
    }
}