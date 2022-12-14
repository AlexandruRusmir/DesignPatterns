<?php

declare(strict_types=1);

include_once 'Element.php';

class ImageProxy implements Element
{
    /** @var string|null  */
    public ?string $url;

    public $dim;

    /** @var Image|null  */
    public ?Image $realImage;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitImageProxy($this);
    }

    public function loadImage(): ?Image
    {
        if (!isset($this->realImage)) {
            $this->realImage = new Image($this->url);
        }

        return $this->realImage;
    }

    public function print()
    {
        $image = $this->loadImage();
        $image->print();
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