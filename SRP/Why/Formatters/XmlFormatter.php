<?php declare(strict_types=1);

namespace T1k3\SolidExamples\SRP\Why\Formatters;

class XmlFormatter
{
    public function format(IFormattable $formattable): string
    {
        return ArrayToXml::convert($formattable->getContents());
    }
}

