<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\Raca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        $racasId = DB::table('racas')->pluck('id');
        $proprietarios = DB::table('proprietarios')->pluck('id');
        $sexos = ["masculino", "feminino"];
        $pelagens = ["preta", "listrada", "branca", "cinza"];
        foreach (range(1,25) as $index) {
            Paciente::create([
                "nome" => $faker->name(),
                "id_proprietario" => $faker->randomElement($proprietarios),
                "idade" => $faker->randomNumber(),
                "sexo" => $faker->randomElement($sexos),
                "pelagem" => $faker->randomElement($pelagens),
                "peso" => $faker->randomNumber(),
                "id_raca"  => $faker->randomElement($racasId)
            ]);
        } 
        
    }
}
