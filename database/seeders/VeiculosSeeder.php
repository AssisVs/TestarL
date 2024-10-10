<?php

namespace Database\Seeders;

use App\Models\Veiculos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Veiculos::factory()->create([
            'placa' => 'jpp3058',
            'status' => 'livre',
            'alocado_em' => '',
            'liberado_em' => ''
        ]);

        $this->call([
            VeiculosSeeder::class,
        ]);
    }
}
