<?php

namespace App\Services\Banks;

use App\Services\BankInterface;
use Tests\Mocks\MockResponse;

class BankC implements BankInterface {

    public $amount;

    public function __construct()
    {
        $response = json_decode(MockResponse::bankC());

        $this->amount = $response->value;
    }

    public function amount()
    {
        return $this->amount;
    }
}
