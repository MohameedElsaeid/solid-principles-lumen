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
     * @param Carbon                   $startDate
     * @param Carbon                   $endDate
     * @param FormatterOutputInterface $formatterOutput
     * @return string
     */
    public function between(Carbon $startDate, Carbon $endDate, FormatterOutputInterface $formatterOutput): string
    {
        $sales = $this->requestFinancialRepo->requestProfitBetween($startDate, $endDate);

        return $formatterOutput->requestProfitOutput($sales);
    }

}
