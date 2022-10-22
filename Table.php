<?php

declare(strict_types=1);

class Table
{
    /** @var string|null  */
    private ?string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function print(): void
    {
        echo 'Table title: ' . $this->title . '<br>';
    }
}