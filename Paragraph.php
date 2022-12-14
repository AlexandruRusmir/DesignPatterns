<?php

declare(strict_types=1);

include_once 'Element.php';
include_once 'AlignStrategy.php';

class Paragraph implements Element
{
    /** @var string|null  */
    private ?string $text;

    /** @var AlignStrategy|null  */
    private ?AlignStrategy $alignStrategy;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    public function setAlignStrategy(AlignStrategy $alignStrategy): void
    {
        $this->alignStrategy = $alignStrategy;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitParagraph($this);
    }

    public function print(): void
    {
        if (isset($this->alignStrategy)) {
            echo  $this->alignStrategy->render($this) . '<br>';
        } else {
            echo $this->getText() . '<br>';
        }
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