<?php

namespace Database\Seeders;

use App\Models\Medicamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            Medicamento::create([
                "nome" => $faker->name(),
                "principio_ativo" => $faker->name(),
                "administracao" => $faker->name(),
                "dose" => Random::generate(2, '0-9'),
                "lote" => Random::generate(4, '0-9'),
                "validade" => $faker->date(),
                "quantidade" => Random::generate(5, '0-9'),
                "descricao" => $faker->sentence()
            ]);
        }

    }
}
