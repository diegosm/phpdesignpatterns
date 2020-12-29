<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\ToolExample;

class SelectionTool implements Tool
{
    public function mouseDown(): string
    {
        return "Selection icon";
    }

    public function mouseUp(): string
    {
        return "Draw a dashed rectangle";
    }
}
