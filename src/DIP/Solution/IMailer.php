<?php declare(strict_types=1);

namespace T1k3\SolidExamples\DIP\Solution;

interface IMailer
{
    public function send(): string;
}

