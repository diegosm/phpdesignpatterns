<?php

declare(strict_types=1);

namespace DesignPatterns\Memento\Example1;

class Editor
{
    private string $content;

    public function createState() : EditorState
    {
        return new EditorState($this->content);
    }

    public function restore(EditorState $state)
    {
        $this->content = $state->getContent();
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent() : string
    {
        return $this->content;
    }
}