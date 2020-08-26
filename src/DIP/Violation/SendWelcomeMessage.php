<?php declare(strict_types=1);

namespace T1k3\SolidExamples\DIP\Violation;

class SendWelcomeMessage
{
    private Mailer $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
}

