<?php

namespace Database\Seeders;

use App\Models\Consulta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = \Faker\Factory::create();

        $categoriaId = DB::table('categoria_consulta')->pluck('id');
        $pacientesId = DB::table('pacientes')->pluck('id');

        for ($i = 0; $i < 25; $i++) {
            Consulta::create([
                "descricao" => $faker->sentence(),
                "data" => $faker->date(),
                "id_categoria" => $faker->randomElement($categoriaId),
                "id_paciente" => $faker->randomElement($pacientesId)
            ]);
        }
        
    }
}
