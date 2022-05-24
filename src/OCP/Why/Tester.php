<?php declare(strict_types=1);

namespace T1k3\SolidExamples\OCP\Why;

class Tester implements IMember
{
    public function work(): string
    {
        return 'testing';
    }
}

