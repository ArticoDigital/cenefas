<?php

use App\Model\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name' => 'Colombia',
        ]);

        Country::create([
            'name' => 'Panamá',
        ]);

        Country::create([
            'name' => 'Perú',
        ]);

    }
}
