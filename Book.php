<?php

declare(strict_types=1);

include_once 'Chapter.php';
include_once 'Author.php';

class Book
{
    /** @var string|null  */
    private ?string $title;

    /** @var Chapter[]|null  */
    private ?array $chapters;

    /** @var Author|null  */
    private ?Author $author;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function createNewChapter(string $chapterName): int
    {
        $chapter = new Chapter($chapterName);
        $this->chapters[] = $chapter;

        return count($this->chapters) - 1;
    }

    public function addAuthor(Author $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): ?Author
    {
        return $this->author ?? null;
    }

    public function getChapter(int $index): ?Chapter
    {
       return $this->chapters[$index] ?? null;
    }

    public function print(): void
    {
        echo 'Book name: ' . $this->title . '<br>';

        $this->author->print();

        if (isset($chapters)) {
            foreach ($this->chapters as $chapter) {
                $chapter->print();
            }
        }

    }
}