<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Why;

class ScrumMaster implements IMember
{
    public function work(): string
    {
        return "managing";
    }
}

