<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\State\ToolExample;

interface Tool
{
    public function mouseDown() : string;
    public function mouseUp() : string;
}