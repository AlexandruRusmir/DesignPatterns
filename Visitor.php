<?php

declare(strict_types=1);

interface Visitor
{
    public function visitBook(Book $book): void;
    public function visitSection(Section $section): void;
    public function visitTableOfContents(TableOfContents $tableOfContents): void;
    public function visitParagraph(Paragraph $paragraph): void;
    public function visitImageProxy(ImageProxy $imageProxy): void;
    public function visitImage(Image $image): void;
    public function visitTable(Table $table): void;
}