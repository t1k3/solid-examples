<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Violation;

use Exception;

require_once __DIR__ . "/../../autoload.php";

$programmer = new Programmer();
$tester = new Tester();
$scrumMaster = new ScrumMaster();

$projectManagement = new ProjectManagement();

try {
    echo "programmer: " . $projectManagement->process($programmer) . "\n";
    echo "tester: " . $projectManagement->process($tester) . "\n";
    echo "scrum master: " . $projectManagement->process($scrumMaster) . "\n";
} catch (Exception $e) {
    echo "error: " . $e->getMessage() . "\n";
}
