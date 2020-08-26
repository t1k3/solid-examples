<?php declare(strict_types=1);

namespace T1k3\SolidExamples\DIP\Solution;

class SmtpMailer implements IMailer
{
    public function send(): string
    {
        return "The email has been sent";
    }
}

