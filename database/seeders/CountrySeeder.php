<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name'       => 'Afghanistan',
                'short_code' => 'af',
            ],

            [
                'name'       => 'Albania',
                'short_code' => 'al',
            ],

            [
                'name'       => 'Algeria',
                'short_code' => 'dz',
            ],

            [
                'name'       => 'Zambia',
                'short_code' => 'zm',
            ],

            [
                'name'       => 'Zimbabwe',
                'short_code' => 'zw',
            ],
        ];

        Country::insert($countries);
    }
}
