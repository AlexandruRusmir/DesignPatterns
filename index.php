<?php

declare(strict_types=1);

include_once 'Book.php';
include_once 'Author.php';
include_once 'ImageProxy.php';

$startTime = floor(microtime(true) * 1000);
$img1 = new ImageProxy('Pamela Anderson');
$img2 = new ImageProxy('Kim Kardashian');
$img3 = new ImageProxy('Kirby Griffin');
$playboyS1 = new Section('Front Cover');
$playboyS1->add($img1);
$playboyS2 = new Section('Summer girls');
$playboyS2->add($img2);
$playboyS2->add($img3);
$playboy = new Book('Playboy');
$playboy->addContent($playboyS1);
$playboy->addContent($playboyS2);
$endTime = floor(microtime(true) * 1000);
echo 'It took ' . ($endTime - $startTime) . ' milliseconds <br>';

$startTime = floor(microtime(true) * 1000);
$playboyS1->print();
$endTime = floor(microtime(true) * 1000);
echo 'It took ' . ($endTime - $startTime) . ' milliseconds <br>';

$startTime = floor(microtime(true) * 1000);
$playboyS1->print();
$endTime = floor(microtime(true) * 1000);
echo 'It took ' . ($endTime - $startTime) . ' milliseconds <br>';