<?php

namespace Database\Seeders;

use App\Models\car;
use Illuminate\Database\Seeder;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars=[
            [
                'nombre' => 'Box Car 1',
                'destinos_id' => 1,
                'destinatarios_id' => 2
            ],
            [
                'nombre' => 'Box Car 2',
                'destinos_id' => 2,
                'destinatarios_id' => 2
            ],
            [
                'nombre' => 'Box Car 3',
                'destinos_id' => 1,
                'destinatarios_id' => 1
            ],
            [
                'nombre' => 'Box Car 4',
                'destinos_id' => 3,
                'destinatarios_id' => 3
            ],
            [
                'nombre' => 'Box Car 5',
                'destinos_id' => 3,
                'destinatarios_id' => 2
            ],
            [
                'nombre' => 'Box Car 6',
                'destinos_id' => 1,
                'destinatarios_id' => 3
            ],

        ];
        foreach ($cars as $key => $car) {
            car::create([
                'nombre' => $car['nombre'],
                'destinos_id' => $car['destinos_id'],
                'destinatarios_id' => $car['destinatarios_id']
            ]);
        }
    }
}
