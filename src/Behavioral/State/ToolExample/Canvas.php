<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\ToolExample;

class Canvas
{
    private Tool $currentTool;

    public function getCurrentTool(): Tool
    {
        return $this->currentTool;
    }

    public function setCurrentTool(Tool $currentTool): void
    {
        $this->currentTool = $currentTool;
    }

    public function mouseDown() : string
    {
        return $this->currentTool->mouseDown();
    }

    public function mouseUp() : string
    {
        return $this->currentTool->mouseUp();
    }
}