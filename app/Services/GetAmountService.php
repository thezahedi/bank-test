<?php

namespace App\Services;

class GetAmountService
{
    public function sum(BankInterface ...$banks)
    {
        $amount = 0;

        foreach ($banks as $bank) {
            $amount += $bank->amount();
        }

        return $amount;
    }
}
