<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Violation;

interface ISwitchable
{
    public function startEngine(): void;

    public function stopEngine(): void;

    public function turnOnRadio(): void;

    public function turnOffRadio(): void;

    public function turnOnCamera(): void;

    public function turnOffCamera(): void;
}

