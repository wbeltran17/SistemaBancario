<?php

namespace Database\Seeders;

use App\Models\MovementType;
use Illuminate\Database\Seeder;

class MovementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MovementType::create([
            'mt_id' => 1,
            'mt_name' => 'Compra',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        MovementType::create([
            'mt_id' => 2,
            'mt_name' => 'Pagos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        MovementType::create([
            'mt_id' => 3,
            'mt_name' => 'Abonos',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        MovementType::create([
            'mt_id' => 4,
            'mt_name' => 'Activación',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        MovementType::create([
            'mt_id' => 5,
            'mt_name' => 'Bloqueo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
