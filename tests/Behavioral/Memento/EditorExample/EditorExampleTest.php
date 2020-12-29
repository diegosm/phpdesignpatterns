<?php

declare(strict_types=1);

namespace Tests\Behavioral\Memento\EditorExample;

use DesignPatterns\Behavioral\Memento\EditorExample\Editor;
use DesignPatterns\Behavioral\Memento\EditorExample\History;
use PHPUnit\Framework\TestCase;

class EditorExampleTest extends TestCase
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
