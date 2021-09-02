<?php

namespace Tests\Feature;

use App\Models\Ares;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class getAresInformationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @dataProvider provideInvalidData
     * @test
     */
    public function invalidRequest($input)
    {
        $response = $this->post('/ares', [
            'ico' => $input,
        ]);

        $response->assertSessionHasErrors();
        self::assertCount(0, Ares::all());
    }

    public function provideInvalidData()
    {
        return [
            ['abc'],
            [''],
            [null],
            [true],
            [12345],
            [123456789125],
        ];
    }

    /** @test */
    public function basicRequest()
    {
        $response = $this->post('/ares', [
            'ico' => 16191129,
        ]);

        $response->assertOk();
        $response->assertJson($this->Data());
    }

    protected function Data(): array
    {
        return [
            'name'   => 'McDonald`s ČR spol. s r.o.',
            'street' => 'Radlická 740/113c',
            'town'   => 'Praha - Jinonice',
            'zip'    => '15800',
            'ico'    => 16191129,
        ];
    }

    /** @test */
    public function dataSavedInDB()
    {
        $this->withExceptionHandling();
        self::assertCount(0, Ares::all());
        $response = $this->post('/ares', [
            'ico' => '16191129',
        ]);

        $response->assertOk();
        self::assertCount(1, Ares::all());

        $this->assertDatabaseHas('ares', $this->Data());
    }

    /** @test */
    public function dataUpdatedInDb()
    {
        $this->withExceptionHandling();
        self::assertCount(0, Ares::all());
        $response = $this->post('/ares', [
            'ico' => '16191129',
        ]);

        $response->assertOk();
        self::assertCount(1, Ares::all());


        $response = $this->post('/ares', [
            'ico' => '16191129',
        ]);
        $response->assertOk();
        self::assertCount(1, Ares::all());

        $this->assertDatabaseHas('ares', $this->Data());
    }
}