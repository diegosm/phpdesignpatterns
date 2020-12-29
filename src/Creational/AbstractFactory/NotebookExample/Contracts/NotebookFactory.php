<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory\NotebookExample\Contracts;

interface NotebookFactory
{
    public function createMemory() : MemoryInterface;

    public function createDisplay() : DisplayInterface;

    public function createProcessor() : ProcessorInterface;
}
