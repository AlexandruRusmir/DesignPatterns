<?php

declare(strict_types=1);

include_once 'Book.php';
include_once 'Author.php';
include_once 'ImageProxy.php';
include_once 'AlignLeft.php';
include_once 'AlignCenter.php';
include_once 'AlignRight.php';

$cap1 = new Section('Capitolul 1');
$p1 = new Paragraph('Paragraph 1');
$cap1->add($p1);

$p2 = new Paragraph('Paragraph 2');
$cap1->add($p2);
$p3 = new Paragraph('Paragraph 3');
$cap1->add($p3);
$p4 = new Paragraph('Paragraph 4');
$cap1->add($p4);

echo 'Without alingment: <br>';
$cap1->print();

$p1->setAlignStrategy(new AlignLeft());
$p2->setAlignStrategy(new AlignCenter());
$p3->setAlignStrategy(new AlignRight());
echo 'With alingment: <br>';
$cap1->print();