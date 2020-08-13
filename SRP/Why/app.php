<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Why;

use T1k3\SolidExamples\SRP\Why\Entities\Comment;
use T1k3\SolidExamples\SRP\Why\Entities\Book;
use T1k3\SolidExamples\SRP\Why\Formatters\JsonFormatter;
use T1k3\SolidExamples\SRP\Why\Formatters\XmlFormatter;

require_once __DIR__ . "/../../autoload.php";

$comment = new Comment("Lorem ipsum");
$book = new Book("Lorem ipsum dolor sit amet", "Robert C. Martin");
$book->setUri("https://www.amazon.com/Clean-Code-Handbook-Software-Craftsmanship-ebook-dp-B001GSTOAM/dp/B001GSTOAM");

$jsonFormatter = new JsonFormatter();
$xmlFormatter = new XmlFormatter();

echo "comment json: " . $jsonFormatter->format($comment) . PHP_EOL;
echo "comment xml: " . $xmlFormatter->format($comment) . PHP_EOL;
echo "book json: " . $jsonFormatter->format($book) . PHP_EOL;
