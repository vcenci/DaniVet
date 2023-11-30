<?php

namespace Database\Seeders;

use App\Models\Especie;
use App\Models\Paciente;
use App\Models\Raca;
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
        $sexos = ["Macho", "Fêmea"];
        $pelagens = ["preta", "listrada", "branca", "cinza"];
        foreach (range(0,15) as $index) {
            $raca = Raca::find($faker->randomElement($racasId));
            $especie = Especie::find($raca->id_especie);
            $idEspecie = $especie->id;
            Paciente::create([
                "nome" => $faker->name(),
                "id_proprietario" => $faker->randomElement($proprietarios),
                "idade" => $faker->randomNumber(),
                "sexo" => $faker->randomElement($sexos),
                "pelagem" => $faker->randomElement($pelagens),
                "peso" => $faker->randomNumber(),
                "id_raca"  => $raca->id,
                "id_especie"  => $idEspecie,
            ]);
        } 
        
    }
}
