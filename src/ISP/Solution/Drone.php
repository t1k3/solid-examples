<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

class Drone extends Vehicle implements ICamera
{
    private bool $cameraIsOn;

    public function turnOnCamera(): void
    {
        $this->cameraIsOn = true;
    }

    public function turnOffCamera(): void
    {
        $this->cameraIsOn = false;
    }
}

