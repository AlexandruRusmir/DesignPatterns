<?php

declare(strict_types=1);

include_once 'Section.php';
include_once 'Author.php';

class Book extends Section
{
    /** @var Author[]|null  */
    protected ?array $authors;

    public function addContent(Element $element): void
    {
        parent::add($element);
    }

    public function addAuthor(Author $author): void
    {
        $this->authors[] = $author;
    }

    public function getAuthors(): ?array
    {
        return $this->authors ?? null;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitBook($this);
    }

    public function print(): void
    {
        echo 'Book name: ' . $this->name . '<br>';

        if (isset($this->authors)) {
            foreach ($this->authors as $author) {
                $author->print();
            }
        }

        if (isset($this->elements)) {
            foreach ($this->elements as $element) {
                $element->print();
            }
        }

    }
}