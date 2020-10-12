<?php


namespace App\Solids\SingleResponsibility;


interface FormatterOutputInterface
{
    public function requestProfitOutput(int $profit): string;
}
