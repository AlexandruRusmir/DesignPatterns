<?php

declare(strict_types=1);

class Book
{
    /** @var string|null  */
    private ?string $bookName;

    /** @var string[]|null  */
    private ?array $paragraphs;

    /** @var string[]|null  */
    private ?array $images;

    /** @var string[]|null  */
    private ?array $tables;

    public function __construct(string $bookName)
    {
        $this->bookName = $bookName;
    }

    public function createNewParagraph(string $paragraph): void
    {
        $this->paragraphs[] = $paragraph;
    }

    public function createNewImage(string $image): void
    {
        $this->images[] = $image;
    }

    public function createNewTable(string $table): void
    {
        $this->tables[] = $table;
    }

    public function __toString(): string
    {
        $returnMessage = 'Book name: ' . $this->bookName . '\n';

        foreach ($this->paragraphs as $paragraph) {
            $returnMessage .= 'Paragraph: ' . $paragraph . '\n';
        }

        foreach ($this->images as $image) {
            $returnMessage .= 'Image: ' . $image . '\n';
        }

        foreach ($this->tables as $table) {
            $returnMessage .= 'Table: ' . $table . '\n';
        }

        return $returnMessage;
    }
}