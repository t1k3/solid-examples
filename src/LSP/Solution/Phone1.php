<?php declare(strict_types=1);

namespace T1k3\SolidExamples\LSP\Solution;

use Exception;

class Phone1 extends Phone
{
    public function __construct()
    {
        $this->version = 1;
        parent::__construct();
    }

    public function setCamera(ICamera $camera): void
    {
        if ($camera->getVersion() > 1) {
            throw new Exception("The camera version is not supported.");
        }

        $this->camera = $camera;
    }

    public function takePhoto(): string
    {
        return $this->camera->takePhoto();
    }
}
