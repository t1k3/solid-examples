<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

class Car extends Vehicle implements IRadio
{
    private bool $radioIsOn;

    public function turnOnRadio(): void
    {
        $this->radioIsOn = true;
    }

    public function turnOffRadio(): void
    {
        $this->radioIsOn = false;
    }
}

