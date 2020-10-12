<?php


namespace App\Solids\SingleResponsibility;


class JSONOutput implements FormatterOutputInterface
{

    public function requestProfitOutput(int $profit): string
    {
        return json_encode(
            [
                'requestProfit' => $profit
            ]
        );
    }
}
