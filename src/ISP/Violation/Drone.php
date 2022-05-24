<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Violation;

use Exception;

class Drone extends Vehicle
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

    public function turnOnRadio(): void
    {
        throw new Exception('Oops, Something Went Wrong: I can't turn on the radio.');
    }

    public function turnOffRadio(): void
    {
        throw new Exception('Oops, Something Went Wrong: I can't turn off the radio.');
    }
}

