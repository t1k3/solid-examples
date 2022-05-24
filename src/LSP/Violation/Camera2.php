<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Violation;

class Camera2
{
    public function getVersion(): int
    {
        return 2;
    }

    public function takePhoto(): string
    {
        return 'Nice photo was taken, applied some filters.';
    }
}
