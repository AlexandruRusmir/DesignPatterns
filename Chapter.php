<?php

declare(strict_types=1);

include_once 'SubChapter.php';

class Chapter
{
    /** @var string|null  */
    private ?string $name;

    /** @var SubChapter[]|null  */
    private ?array $subChapters;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function createNewSubChapter(string $subChapterName): int
    {
        $subChapter = new SubChapter($subChapterName);
        $this->subChapters[] = $subChapter;

        return count($this->subChapters) - 1;
    }

    public function getSubChapter(int $index): ?SubChapter
    {
        return $this->subChapters[$index] ?? null;
    }

    public function print(): void
    {
        echo 'Chapter name: ' . $this->name . '<br>';

        if (isset($this->subChapters)) {
            foreach ($this->subChapters as $subChapter) {
                $subChapter->print();
            }
        }

    }
}