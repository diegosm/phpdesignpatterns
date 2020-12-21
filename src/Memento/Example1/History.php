<?php

declare(strict_types=1);

namespace DesignPatterns\Memento\Example1;

class History
{
    private array $states;

    public function push(EditorState $state) : void
    {
        $this->states[] = $state;
    }

    public function pop()
    {
        array_pop($this->states);
        return end($this->states);
    }
}