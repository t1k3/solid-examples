<?php declare(strict_types=1);

namespace T1k3\SolidExamples\ISP\Solution;

interface IEngine
{
    public function startEngine(): void;

    public function stopEngine(): void;
}

