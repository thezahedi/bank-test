<?php

namespace App\Services\Banks;

use App\Services\BankInterface;
use Tests\Mocks\MockResponse;

class BankB implements BankInterface {

    public $amount;

    public function __construct()
    {
        $response = json_decode(MockResponse::bankB());

        $this->amount = $response->balance;
    }

    public function amount()
    {
        return $this->amount;
    }
}
