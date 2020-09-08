<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Solution;

interface ICamera
{
    public function getVersion(): int;

    public function takePhoto(): string;
}
