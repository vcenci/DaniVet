<?php

namespace Database\Seeders;

use App\Models\Raca;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $especieIds = DB::table('especies')->pluck('id');

        foreach (range(1,30) as $index) {
            Raca::create([
                'raca' => $faker->name(),
                'id_especie' => $faker->randomElement($especieIds),
            ]);
        } 
    }
}
