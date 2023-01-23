<?php

namespace App\Services\Banks;

use App\Services\BankInterface;
use Tests\Mocks\MockResponse;

class BankA implements BankInterface {

    public $amount;

    public function __construct()
    {
        $response = json_decode(MockResponse::bankA());

        $this->amount = $response->amount;
    }

    public function amount()
    {
        return $this->amount;
    }
}
