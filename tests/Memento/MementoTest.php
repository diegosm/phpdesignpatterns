<?php

declare(strict_types=1);

namespace Tests\Memento;

use DesignPatterns\Memento\Example1\Editor;
use DesignPatterns\Memento\Example1\History;
use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testItCanCreateEditor()
    {
        $editor = new Editor();
        $editor->setContent("a");

        $this->assertInstanceOf(Editor::class, $editor);
        $this->assertEquals("a", $editor->getContent());
    }

    public function testItCanUseUndoMechanism()
    {
        $editor = new Editor();
        $history = new History();

        $editor->setContent("a");
        $history->push($editor->createState());

        $editor->setContent("b");
        $history->push($editor->createState());

        $editor->setContent("c");
        $history->push($editor->createState());

        $editor->restore($history->pop());

        $this->assertEquals("b", $editor->getContent());

        $editor->restore($history->pop());
        $this->assertEquals("a", $editor->getContent());
    }
}