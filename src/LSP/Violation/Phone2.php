<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Violation;

class Phone2
{
    private int $version = 2;

    private Camera2 $camera;

    public function getVersion(): int
    {
        return $this->version;
    }

    public function setCamera(Camera2 $camera): void
    {
        $this->camera = $camera;
    }

    public function takePhoto(): string
    {
        return $this->camera->takePhoto();
    }
}
