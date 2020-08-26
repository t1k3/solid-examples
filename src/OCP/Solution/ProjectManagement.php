<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Solution;

class ProjectManagement
{
    public function process(IMember $member): string
    {
        return $member->work();
    }
}

