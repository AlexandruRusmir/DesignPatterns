<?php

Interface Element
{
    public function print();

    public function add(Element $element): void;

    public function remove(Element $element): void;

    public function get(int $position): ?Element;

    public function accept(Visitor $visitor): void;
}