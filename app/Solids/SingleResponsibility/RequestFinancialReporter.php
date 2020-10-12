<?php


namespace App\Solids\SingleResponsibility;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

/**
 * Class RequestFinancialReporter
 * @package App\Solids\SingleResponsibility
 */
class RequestFinancialReporter
{
    /**
     * @param Carbon $startDate
     * @param Carbon $endDate
     * @return string
     */
    public function between(Carbon $startDate, Carbon $endDate): string
    {
        $sales = $this->queryDBForRequestProfitBetween($startDate, $endDate);

        return $this->format($sales);
    }

    /**
     * @param Carbon $startDate
     * @param Carbon $endDate
     * @return int
     */
    private function queryDBForRequestProfitBetween(Carbon $startDate, Carbon $endDate): int
    {
        return DB::table('request_financial_new_payment')
            ->where('request_profit', '>', 0)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum(
                'request_profit'
            );
    }

    /**
     * @param int $sales
     * @return string
     */
    private function format(int $sales): string
    {
        return "<h1>Profit : $sales</h1>";
    }
}
