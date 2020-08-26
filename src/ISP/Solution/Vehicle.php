<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

abstract class Vehicle implements IEngine
{
    private bool $engineIsRunning;

    public function startEngine(): void
    {
        $this->engineIsRunning = true;
    }

    public function stopEngine(): void
    {
        $this->engineIsRunning = false;
    }
}

