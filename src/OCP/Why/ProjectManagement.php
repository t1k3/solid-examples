<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Why;

class ProjectManagement
{
    public function process(IMember $member): string
    {
        return $member->work();
    }
}

