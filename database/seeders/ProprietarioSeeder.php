<?php

namespace Database\Seeders;

use App\Models\Proprietario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class ProprietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        foreach (range(1,15) as $index) {

            $siglas = [
                'AC',
                'AL',
                'AP',
                'AM',
                'BA',
                'CE',
                'DF',
                'ES',
                'GO',
                'MA',
                'MS',
                'MT',
                'MG',
                'PA',
                'PB',
                'PR',
                'PE',
                'PI',
                'RJ',
                'RN',
                'RS',
                'RO',
                'RR',
                'SC',
                'SP',
                'SE',
                'TO',
            ];

            Proprietario::create([
                "nome" => $faker->name(),
                "cpf" => Random::generate(11, '0-9'),
                "rua" => $faker->streetAddress(),
                "telefone" => $faker->phoneNumber(),
                "email" => $faker->email(),
                "numero" => $faker->randomNumber(3),
                "bairro" => $faker->streetName(),
                "cep" => $faker->randomNumber(8, true),
                "cidade" => $faker->city(),
                "uf" => $faker->randomElement($siglas),
            ]);
        }
        
    }
}
