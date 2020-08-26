<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

interface ICamera
{
    public function turnOnCamera(): void;

    public function turnOffCamera(): void;
}

