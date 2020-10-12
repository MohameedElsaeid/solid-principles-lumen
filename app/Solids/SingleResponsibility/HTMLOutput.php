<?php


namespace App\Solids\SingleResponsibility;


class HTMLOutput implements FormatterOutputInterface
{

    public function requestProfitOutput(int $profit): string
    {
        return "<h1>Profit : $profit</h1>";
    }
}
