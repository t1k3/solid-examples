<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Violation;

class Camera1
{
    public function getVersion(): int
    {
        return 1;
    }

    public function takePhoto(): string
    {
        return 'Photo was taken with a lot of noise.';
    }
}
