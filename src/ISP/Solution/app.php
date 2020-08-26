<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

require_once __DIR__ . "/../../autoload.php";

$car = new Car();
$drone = new Drone();

// Check methods of $car or $drone
$car->startEngine();
$car->turnOnRadio();

$drone->startEngine();
$drone->turnOnCamera();
