<?php

declare(strict_types=1);

include_once 'Visitor.php';

class TableOfContentsGenerator implements Visitor
{
    private array $tableOfContents;

    private int $pageCount;

    public function __construct()
    {
        $this->tableOfContents = [];
        $this->pageCount = 0;
    }

    /**
     * @return string[]
     */
    public function getTableOfContentsArray(): array
    {
        return $this->tableOfContents;
    }

    public function visitSection(Section $section): void
    {
        $this->tableOfContents[] = $section->getName() . '....' . $this->pageCount + 1;
        $this->pageCount += count($section->getElements());
    }

    public function visitTableOfContents(TableOfContents $tableOfContents): void
    {
        // TODO: Implement visitTableOfContents() method.
    }

    public function visitParagraph(Paragraph $paragraph): void
    {
        // TODO: Implement visitParagraph() method.
    }

    public function visitImageProxy(ImageProxy $imageProxy): void
    {
        // TODO: Implement visitImageProxy() method.
    }

    public function visitImage(Image $image): void
    {
        // TODO: Implement visitImage() method.
    }

    public function visitTable(Table $table): void
    {
        // TODO: Implement visitTable() method.
    }

    public function visitBook(Book $book): void
    {
    }
}