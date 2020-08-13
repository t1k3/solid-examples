<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Violation;

use Exception;

class ProjectManagement
{
    public function process($member): string
    {
        if ($member instanceof Programmer) {
            return $member->coding();
        } elseif ($member instanceof Tester) {
            return $member->testing();
        } else {
            throw new Exception('Invalid member');
        }
    }
}
