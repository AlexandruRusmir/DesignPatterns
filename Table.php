<?php

declare(strict_types=1);

include_once 'Element.php';

class Table implements Element
{
    /** @var string|null  */
    private ?string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTable($this);
    }

    public function print(): void
    {
        echo 'Table title: ' . $this->title . '<br>';
    }

    public function add(Element $element): void
    {
        // TODO: Implement add() method.
    }

    public function remove(Element $element): void
    {
        // TODO: Implement remove() method.
    }

    public function get(int $position): ?Element
    {
        // TODO: Implement get() method.
        return null;
    }
}