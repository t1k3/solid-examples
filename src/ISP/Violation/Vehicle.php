<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Violation;

abstract class Vehicle implements ISwitchable
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

