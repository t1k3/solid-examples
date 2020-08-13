<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Violation;

use Exception;

require_once __DIR__ . "/../../autoload.php";

$programmer = new Programmer();
$tester = new Tester();
$projectManagement = new ProjectManagement();

try {
    echo "programmer: " . $projectManagement->process($programmer) . PHP_EOL;
    echo "tester: " . $projectManagement->process($tester) . PHP_EOL;
} catch (Exception $e) {
    echo "error: " . $e->getMessage() . PHP_EOL;
}
