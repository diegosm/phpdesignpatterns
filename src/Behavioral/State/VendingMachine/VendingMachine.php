<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\VendingMachine;

class VendingMachine
{
    private State $currentState;

    private int $qtt;

    public function __construct(int $qtt = 0)
    {
        $this->qtt = $qtt;
        $this->currentState = new VendingWaitingDepositState($this);
    }

    public function handle()
    {
        $this->currentState->handle();
    }

    public function toString() : string
    {
        return $this->currentState->toString();
    }

    public function getCurrentState(): State
    {
        return $this->currentState;
    }

    public function setCurrentState(State $currentState): void
    {
        $this->currentState = $currentState;
    }

    public function decrement() : void
    {
        $this->qtt--;

        if ($this->getQtt() < 1) {
            throw new \Exception('Out of stock');
        }
    }

    public function getQtt(): int
    {
        return $this->qtt;
    }
}