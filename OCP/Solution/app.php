<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Solution;

require_once __DIR__ . "/../../autoload.php";

$programmer = new Programmer();
$tester = new Tester();
$projectManagement = new ProjectManagement();

echo "programmer: " . $projectManagement->process($programmer) . "\n";
echo "tester: " . $projectManagement->process($tester) . "\n";
