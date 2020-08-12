<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Solution;

class JsonFormatter
{
    public function format(Comment $comment): string
    {
        return json_encode($comment->getContents());
    }
}

