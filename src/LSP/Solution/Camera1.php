<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Solution;

class Camera1 implements ICamera
{
    public function getVersion(): int
    {
        return 1;
    }

    public function takePhoto(): string
    {
        return "Photo was taken with a lot of noise.";
    }
}
