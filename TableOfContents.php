<?php

declare(strict_types=1);

include_once 'Element.php';

class TableOfContents implements Element
{
    /** @var string|null  */
    private ?string $title;

    private array $tableOfContentsElements;

    public function __construct(string $title)
    {
        $this->title = $title;
        $this->tableOfContentsElements = [];
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTableOfContents($this);
    }

    /**
     * @return string[]
     */
    public function setTableOfContentsElements(array $tableOfContentsElements): void
    {
        $this->tableOfContentsElements = $tableOfContentsElements;
    }

    public function getTableOfContentsElements(): array
    {
        return $this->tableOfContentsElements;
    }

    public function print(): void
    {
        echo 'Table of contents title: ' . $this->title . '<br>';
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