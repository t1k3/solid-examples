<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Solution;

require_once __DIR__ . '/../../autoload.php';

$phone1 = new Phone1();
$phone1->setCamera(new Camera1());
echo 'Version ' . $phone1->getVersion() . ': ' . $phone1->takePhoto() . PHP_EOL;

$phone2 = new Phone2();
$phone2->setCamera(new Camera2());
echo 'Version ' . $phone2->getVersion() . ': ' . $phone2->takePhoto() . PHP_EOL;
