<?php

declare(strict_types=1);

include_once 'Element.php';

class Image implements Element
{
    /** @var string|null  */
    private ?string $url;

    public function __construct(string $url)
    {
        sleep(5);
        $this->url = $url;
    }

    public function print(): void
    {
        echo 'Image name: ' . $this->url . '<br>';
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitImage($this);
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