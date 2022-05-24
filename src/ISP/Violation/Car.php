<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Violation;

use Exception;

class Car extends Vehicle
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

    public function turnOnCamera(): void
    {
        throw new Exception('Oops, Something Went Wrong: I can't turn on the camera.');
    }

    public function turnOffCamera(): void
    {
        throw new Exception('Oops, Something Went Wrong: I can't turn off the camera.');
    }
}

