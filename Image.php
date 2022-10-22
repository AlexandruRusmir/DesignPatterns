<?php

declare(strict_types=1);

include_once 'Element.php';

class Image implements Element
{
    /** @var string|null  */
    private ?string $imageName;

    public function __construct(string $imageName)
    {
        $this->imageName = $imageName;
    }

    public function print(): void
    {
        echo 'Image name: ' . $this->imageName . '<br>';
    }
}