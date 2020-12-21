<?php

declare(strict_types=1);

namespace DesignPatterns\Memento\Example1;

class EditorState
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /** @return string */
    public function getContent(): string
    {
        return $this->content;
    }
}