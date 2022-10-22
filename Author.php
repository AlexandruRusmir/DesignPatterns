<?php

declare(strict_types=1);

class Author
{
    /** @var string|null  */
    private ?string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function print(): void
    {
        echo 'Author name: ' . $this->name . '<br>';
    }
}