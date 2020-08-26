<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Why\Formatters;

class JsonFormatter implements IFormatter
{
    public function format(IFormattable $formattable): string
    {
        return json_encode($formattable->getContents());
    }
}

