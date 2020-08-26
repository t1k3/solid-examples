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

    public function processOtherSolution($member): string
    {
        $class = get_class($member);
        switch ($class) {
            case Programmer::class:
                return $member->coding();
            case Tester::class:
                return $member->testing();
            default:
                throw new Exception('Invalid member');
        }
    }
}
