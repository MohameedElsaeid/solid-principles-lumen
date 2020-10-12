<?php


namespace App\Solids\SingleResponsibility;


use App\Repositories\RequestFinancialRepository;
use Carbon\Carbon;

/**
 * Class RequestFinancialReporter
 * @package App\Solids\SingleResponsibility
 */
class RequestFinancialReporter
{

    private RequestFinancialRepository $requestFinancialRepo;

    /**
     * RequestFinancialReporter constructor.
     * @param RequestFinancialRepository $requestFinancialRepo
     */
    public function __construct(RequestFinancialRepository $requestFinancialRepo)
    {
        $this->requestFinancialRepo = $requestFinancialRepo;
    }

    /**
     * @param Carbon $startDate
     * @param Carbon $endDate
     * @return string
     */
    public function between(Carbon $startDate, Carbon $endDate): string
    {
        $sales = $this->requestFinancialRepo->requestProfitBetween($startDate, $endDate);

        return $this->format($sales);
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
