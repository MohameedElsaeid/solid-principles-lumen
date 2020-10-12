<?php


namespace App\Solids\SingleResponsibility;


/**
 * Class XMLOutput
 * @package App\Solids\SingleResponsibility
 */
class XMLOutput implements FormatterOutputInterface
{

    public function requestProfitOutput(int $profit): string
    {
        return "<request> <profit>$profit</profit> </request>";
    }
}
