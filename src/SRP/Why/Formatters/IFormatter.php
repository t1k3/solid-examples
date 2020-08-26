<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Why\Formatters;

interface IFormatter
{
    public function format(IFormattable $formattable): string;
}

