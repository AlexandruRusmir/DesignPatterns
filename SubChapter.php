<?php

declare(strict_types=1);

include_once 'Image.php';
include_once 'Paragraph.php';
include_once 'Table.php';

class SubChapter
{
    /** @var string|null  */
    private ?string $name;

    /** @var Image[]|null  */
    private ?array $images;

    /** @var Paragraph[]|null  */
    private ?array $paragraphs;

    /** @var Table[]|null  */
    private ?array $tables;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function createNewImage(string $imageName): void
    {
        $image = new Image($imageName);
        $this->images[] = $image;
    }

    public function createNewParagraph(string $paragraphName): void
    {
        $paragraph = new Paragraph($paragraphName);
        $this->paragraphs[] = $paragraph;
    }

    public function createNewTable(string $tableName): void
    {
        $table = new Table($tableName);
        $this->tables[] = $table;
    }

    public function print(): void
    {
        echo 'Subchapter name: ' . $this->name . '<br>';

        if (isset($this->images)) {
            foreach ($this->images as $image) {
                $image->print();
            }
        }

        if (isset($this->paragraphs)) {
            foreach ($this->paragraphs as $paragraph) {
                $paragraph->print();
            }
        }

        if (isset($this->tables)) {
            foreach ($this->tables as $table) {
                $table->print();
            }
        }
    }
}