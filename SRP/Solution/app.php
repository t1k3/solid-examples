<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Solution;

include "Comment.php";
include "JsonFormatter.php";

$comment = new Comment("Lorem ipsum");
$jsonFormatter = new JsonFormatter();
$json = $jsonFormatter->format($comment);

echo "json: " . $json . PHP_EOL;
