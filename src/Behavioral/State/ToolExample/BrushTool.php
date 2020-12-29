<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\ToolExample;

class BrushTool implements Tool
{
    public function mouseDown(): string
    {
        return "Brush icon";
    }

    public function mouseUp(): string
    {
        return "Draw a line";
    }
}
