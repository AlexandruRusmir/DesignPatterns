<?php

declare(strict_types=1);

include_once 'AlignStrategy.php';

class AlignCenter implements AlignStrategy
{
    public function render(Paragraph $paragraph): void
    {
        echo '###' . $paragraph->getText() . '####';
    }
}