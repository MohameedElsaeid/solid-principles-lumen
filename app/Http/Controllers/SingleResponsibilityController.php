<?php

namespace App\Http\Controllers;

use App\Solids\SingleResponsibility\RequestFinancialReporter;
use Carbon\Carbon;

/**
 * Class SingleResponsibilityController
 * @package App\Http\Controllers
 */
class SingleResponsibilityController extends Controller
{
    /**
     * @param RequestFinancialReporter $financialReporter
     * @return string
     */
    public function index(RequestFinancialReporter $financialReporter): string
    {
        $start = Carbon::now()->subDays(20);
        $end = Carbon::now();
        return $financialReporter->between($start, $end);
    }
}
