<?php

declare(strict_types=1);

class Image
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