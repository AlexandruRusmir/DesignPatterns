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

    public function add(Element $element): void
    {
        // TODO: Implement add() method.
    }

    public function remove(Element $element): void
    {
        // TODO: Implement remove() method.
    }

    public function get(int $position): ?Element
    {
        // TODO: Implement get() method.
        return null;
    }
}