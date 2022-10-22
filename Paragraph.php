<?php

declare(strict_types=1);

include_once 'Element.php';

class Paragraph implements Element
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