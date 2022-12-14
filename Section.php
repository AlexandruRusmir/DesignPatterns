<?php

declare(strict_types=1);

include_once 'Image.php';
include_once 'Paragraph.php';
include_once 'Table.php';

class Section implements Element
{
    /** @var string|null  */
    protected ?string $name;

    /** @var Element[]|null  */
    protected ?array $elements;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function remove(Element $element): void
    {
        if (($key = array_search($element, $this->elements)) !== false) {
            unset($this->elements[$key]);
        }
    }

    public function get(int $position): Element
    {
        return $this->elements[$position];
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitSection($this);
        if (isset($this->elements)) {
            foreach ($this->elements as $element) {
                $element->accept($visitor);
            }
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function print(): void
    {
        echo 'Section name: ' . $this->name . '<br>';

        if (isset($this->elements)) {
            foreach ($this->elements as $element) {
                $element->print();
            }
        }
    }
}