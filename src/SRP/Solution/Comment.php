<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Solution;

use DateTime;
use DateTimeInterface;

class Comment
{
    private string $comment;

    private DateTimeInterface $createdAt;

    public function __construct(string $comment)
    {
        $this->comment = $comment;
        $this->createdAt = new DateTime();
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getContents(): array
    {
        return [
            "comment" => $this->getComment(),
            "createdAt" => $this->getCreatedAt(),
        ];
    }
}

