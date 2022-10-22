<?php

declare(strict_types=1);

include_once 'Image.php';
include_once 'Paragraph.php';
include_once 'Table.php';

class SubChapter
{
    /** @var string|null  */
    private ?string $name;

    /** @var Element[]|null  */
    private ?array $elements;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function createNewImage(string $imageName): void
    {
        $image = new Image($imageName);
        $this->elements[] = $image;
    }

    public function createNewParagraph(string $paragraphName): void
    {
        $paragraph = new Paragraph($paragraphName);
        $this->elements[] = $paragraph;
    }

    public function createNewTable(string $tableName): void
    {
        $table = new Table($tableName);
        $this->elements[] = $table;
    }

    public function print(): void
    {
        echo 'Subchapter name: ' . $this->name . '<br>';

        if (isset($this->elements)) {
            foreach ($this->elements as $element) {
                $element->print();
            }
        }
    }
}