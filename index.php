<?php

declare(strict_types=1);

include_once 'Book.php';
include_once 'Author.php';

$discoTitanic = new Book('Disco Titanic');
$author = new Author('Vasile Gheorghe');

$discoTitanic->addAuthor($author);

$indexChapterOne = $discoTitanic->createNewChapter("Capitolul 1");
$chp1 = $discoTitanic->getChapter($indexChapterOne);
$indexSubChapterOneOne = $chp1->createNewSubChapter('Subcapitolul 1.1');
$scOneOne = $chp1->getSubChapter($indexSubChapterOneOne);

$scOneOne->createNewParagraph('Paragraph1');
$scOneOne->createNewParagraph('Paragraph 2');
$scOneOne->createNewParagraph('Paragraph 3');
$scOneOne->createNewImage('Image 1');
$scOneOne->createNewParagraph('Paragraph 4');
$scOneOne->createNewTable('Table 1');
$scOneOne->createNewParagraph('Paragraph 5');

$scOneOne->print();