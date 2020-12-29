<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Memento\EditorExample;

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
