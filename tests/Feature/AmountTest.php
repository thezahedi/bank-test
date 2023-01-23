<?php

namespace Tests\Feature;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Tests\Mocks\MockResponse;
use Tests\TestCase;
use function PHPUnit\Framework\assertEquals;

class AmountTest extends TestCase
{
    public static function getMockedResponse($bankName): Response
    {
        $body = MockResponse::{$bankName}();

        Http::fake(function () use ($body) {
            return Http::response($body, 200);
        });

        return Http::get('');
    }

    public function test_bank_a_response_works()
    {
        $response = self::getMockedResponse('bankA');

        assertEquals(200, $response->status());

        self::assertEquals([
            'amount' => 100000
        ], $response->json());
    }

    public function test_bank_b_response_works()
    {
        $response = self::getMockedResponse('bankB');

        assertEquals(200, $response->status());

        self::assertEquals([
            'balance' => 200000
        ], $response->json());
    }

    public function test_bank_c_response_works()
    {
        $response = self::getMockedResponse('bankC');

        assertEquals(200, $response->status());

        self::assertEquals([
            'value' => 300000
        ], $response->json());
    }

    public function test_get_amount_sum_works()
    {
        $response = $this->getJson(route('amount'));

        assertEquals(600000, $response->json('amount'));
    }
}
