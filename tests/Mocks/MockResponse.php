<?php

namespace Tests\Mocks;

class MockResponse
{
    public static function bankA()
    {
        return file_get_contents(base_path('tests/Mocks/bankA.json'));
    }
    public static function bankB()
    {
        return file_get_contents(base_path('tests/Mocks/bankB.json'));
    }
    public static function bankC()
    {
        return file_get_contents(base_path('tests/Mocks/bankC.json'));
    }
}
