<?php

declare(strict_types=1);

class Paragraph
{
    /** @var string|null  */
    private ?string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function print(): void
    {
        echo 'Paragraph text: ' . $this->text . '<br>';
    }
}