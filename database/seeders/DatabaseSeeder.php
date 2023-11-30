<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $classes = ["Database\Seeders\CategoriaConsultaSeeder", "Database\Seeders\ClassificacoesSeeder", "Database\Seeders\LotesSeeder", "Database\Seeders\EspecieSeeder", "Database\Seeders\RacaSeeder", "Database\Seeders\MedicamentoSeeder", "Database\Seeders\PacienteSeeder", "Database\Seeders\ProprietarioSeeder", "Database\Seeders\MedicamentoSeeder"];
        foreach ($classes as $classe) {
            try {
                $class = new $classe();
                $class->run();
            } catch(\Exception $e) {
            }
        }
    }
}
