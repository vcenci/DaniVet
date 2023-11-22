<?php

namespace Database\Seeders;

use App\Models\CategoriaConsulta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,5) as $index) {
            CategoriaConsulta::create([
                'tipoConsulta' => $faker->word(),
            ]);
        } 
    }
}
