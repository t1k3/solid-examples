<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Why;

require_once __DIR__ . '/../../autoload.php';

$members['programmer'] = new Programmer();
$members['tester'] = new Tester();
$members['scrum master'] = new ScrumMaster();
$projectManagement = new ProjectManagement();

foreach ($members as $title => $member) {
    echo $title . ': ' . $projectManagement->process($member) . PHP_EOL;
}
