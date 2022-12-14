<?php

declare(strict_types=1);

include_once 'Visitor.php';

class BookStatistics implements Visitor
{
    private int $imagesCount;
    private int $tablesCount;
    private int $paragraphsCount;

    public function __construct()
    {
        $this->imagesCount = 0;
        $this->tablesCount = 0;
        $this->paragraphsCount = 0;
    }

    public function printStatistics(): void
    {
        echo 'Book statistics:' . '<br>';
        echo '*** Number of images: ' . $this->imagesCount . '<br>';
        echo '*** Number of tables: ' . $this->tablesCount . '<br>';
        echo '*** Number of paragraphs: ' . $this->paragraphsCount . '<br>';
    }

    public function visitBook(Book $book): void
    {
    }

    public function visitSection(Section $section): void
    {
        // TODO: Implement visitSection() method.
    }

    public function visitTableOfContents(TableOfContents $tableOfContents): void
    {
        // TODO: Implement visitTableOfContents() method.
    }

    public function visitParagraph(Paragraph $paragraph): void
    {
        $this->paragraphsCount++;
    }

    public function visitImageProxy(ImageProxy $imageProxy): void
    {
        // TODO: Implement visitImageProxy() method.
    }

    public function visitImage(Image $image): void
    {
        $this->imagesCount++;
    }

    public function visitTable(Table $table): void
    {
        $this->tablesCount++;
    }
}