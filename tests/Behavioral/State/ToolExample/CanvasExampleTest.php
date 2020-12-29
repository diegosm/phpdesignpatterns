<?php

declare(strict_types=1);

namespace Tests\Behavioral\State\ToolExample;

use DesignPatterns\Behavioral\State\ToolExample\BrushTool;
use DesignPatterns\Behavioral\State\ToolExample\Canvas;
use DesignPatterns\Behavioral\State\ToolExample\SelectionTool;
use PHPUnit\Framework\TestCase;

class CanvasExampleTest extends TestCase
{
    public function testItCanCreateCanvasAndUseDifferentTools()
    {
        $canvas = new Canvas();

        $canvas->setCurrentTool(new SelectionTool());
        $this->assertEquals("Draw a dashed rectangle", $canvas->mouseUp());
        $this->assertEquals("Selection icon", $canvas->mouseDown());

        $canvas->setCurrentTool(new BrushTool());
        $this->assertEquals("Draw a line", $canvas->mouseUp());
        $this->assertEquals("Brush icon", $canvas->mouseDown());
    }
}
