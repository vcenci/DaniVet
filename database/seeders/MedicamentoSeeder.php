<?php

namespace Database\Seeders;

use App\Models\Medicamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Random;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $especieIds = DB::table('especies')->pluck('id');
        $classificacoesId = DB::table('classificacoes')->pluck('id');

        $lotes = $classificacoesId = DB::table('lotes')->pluck('id');
        $j = 0;
        for ($i = 0; $i < 10; $i++) {
            if ($j > 3) {
                $lote = $faker->randomNumber();
            }
            Medicamento::create([
                "nome" => $faker->word(),
                "principioAtivo" => $faker->word(),
                "administracao" => $faker->word(),
                "dose" => $faker->randomNumber(),
                "id_lotelote" => $faker->randomElement($lotes),
                "validade" => $faker->date(),
                "id_classificacao" => $faker->randomElement($classificacoesId),
                "id_especie" => $faker->randomElement($especieIds)
            ]);
        }

    }
}
