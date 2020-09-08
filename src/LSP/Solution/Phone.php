<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Solution;

abstract class Phone
{
    protected int $version;

    protected ICamera $camera;

    public function __construct()
    {

    }

    public function getVersion(): int
    {
        return $this->version;
    }

    abstract public function setCamera(ICamera $camera): void;

    public function takePhoto(): string
    {
        $this->camera->takePhoto();
    }
}
