<?php

namespace Database\Seeders;

use App\Models\Classificacoes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,5) as $index) {
            Classificacoes::create([
                'classificacao' => $faker->word(),
            ]);
        } 
    }
}
