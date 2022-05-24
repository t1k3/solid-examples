<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Violation;

include 'Comment.php';

$comment = new Comment('Lorem ipsum');
$json = $comment->formatJson();

echo 'json: ' . $json . PHP_EOL;
