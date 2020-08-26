<?php declare(strict_types=1);

namespace T1k3\SolidExamples\DIP\Solution;

class SendWelcomeMessage
{
    private IMailer $mailer;

    public function __construct(IMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(): string
    {
        return $this->mailer->send();
    }
}

