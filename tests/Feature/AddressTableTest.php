<?php

namespace Tests\Feature;

use App\Models\Address;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddressTableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function databaseIsSSeeded()
    {
        self::assertCount(300, Address::all());
    }
}
