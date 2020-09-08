<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Violation;

class Phone1
{
    private int $version = 1;

    private Camera1 $camera;

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setCamera(Camera1 $camera): void
    {
        $this->camera = $camera;
    }

    public function takePhoto(): string
    {
        return $this->camera->takePhoto();
    }
}
