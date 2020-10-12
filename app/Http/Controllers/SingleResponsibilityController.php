<?php

namespace App\Http\Controllers;

use App\Solids\SingleResponsibility\RequestFinancialReporter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
//        if (!Auth::check()) {
//            throw new \RuntimeException('Authentications Failed');
//        }


        $start = Carbon::now()->subDays(20);
        $end = Carbon::now();
        return $financialReporter->between($start, $end);
    }
}
