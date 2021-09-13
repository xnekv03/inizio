<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    public function run()
    {
        $data = json_decode(file_get_contents('database/data/addresses.json'), true);

        foreach ($data as $d) {
            Address::create($d);
        }
    }
}
