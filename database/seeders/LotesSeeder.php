<?php

namespace Database\Seeders;

use App\Models\Lote;
use Illuminate\Database\Seeder;

class LotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,5) as $index) {
            Lote::create([
                'lote' => $faker->randomNumber(),
            ]);
        } 
    }
}
