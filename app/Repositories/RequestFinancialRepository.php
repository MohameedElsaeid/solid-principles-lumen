<?php


namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RequestFinancialRepository
{
    /**
     * @param Carbon $startDate
     * @param Carbon $endDate
     * @return int
     */
    public function requestProfitBetween(Carbon $startDate, Carbon $endDate): int
    {
        return DB::table('request_financial_new_payment')
            ->where('request_profit', '>', 0)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum(
                'request_profit'
            );
    }
}
