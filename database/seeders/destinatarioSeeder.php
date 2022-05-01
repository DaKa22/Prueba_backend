<?php

namespace Database\Seeders;

use App\Models\destinatario;
use Illuminate\Database\Seeder;

class destinatarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres=[
            'UPS',
            'FedEx',
            'Old Dominion'
        ];
        foreach ($nombres as $key => $nombre) {
            destinatario::create([
                'nombre' => $nombre
            ]);
        }
    }
}
