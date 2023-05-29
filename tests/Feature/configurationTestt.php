<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class configurationTestt extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $shortName = config("coba.Biodata.shortName");
        $fulltName = config("coba.Biodata.fulltName");
        self::assertEquals($shortName, "firman");
        self::assertEquals($fulltName, "firmansyah");
    }
}
