<?php

namespace App\Http\Controllers;

use App\Services\Banks\BankA;
use App\Services\Banks\BankB;
use App\Services\Banks\BankC;
use App\Services\GetAmountService;

class AmountController extends Controller
{
    public function sum()
    {
        $sum = (new GetAmountService())->sum(
            new BankA(),
            new BankB(),
            new BankC(),
        );

        return response()->json([
            'amount' => $sum,
        ]);
    }
}
