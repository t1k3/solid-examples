<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Why\Entities;

use T1k3\SolidExamples\SRP\Why\Formatters\IFormattable;

class Book implements IFormattable
{
    private string $title;
    private string $author;
    private string $uri = '';

    public function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function setUri(string $uri): void
    {
        $this->uri = $uri;
    }

    public function getContents(): array
    {
        return [
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'uri' => $this->getUri(),
        ];
    }
}

