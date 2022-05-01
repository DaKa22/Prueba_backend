<?php

namespace Database\Seeders;

use App\Models\destino;
use Illuminate\Database\Seeder;

class destinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinos=[
            [
                'clasificacion' => 1,
                'ciudad' => 'Houston'
            ],
            [
                'clasificacion' => 2,
                'ciudad' => 'Chicago'
            ],
            [
                'clasificacion' => 3,
                'ciudad' => 'LA'
            ],

        ];
        foreach ($destinos as $key => $destino) {
            destino::create([
                'clasificacion' => $destino['clasificacion'],
                'ciudad' => $destino['ciudad']
            ]);
        }
    }
}
