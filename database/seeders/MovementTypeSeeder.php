<?php

namespace Database\Seeders;

use App\Models\Movement;
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


        Movement::create([
            'movement_id' => 1,
            'user_id' => 2,
            'card_id' => 1,
            'movement_type' => 4,
            'movement_amount' => 1000,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Movement::create([
            'movement_id' => 2,
            'user_id' => 2,
            'card_id' => 1,
            'movement_type' => 1,
            'movement_amount' => 1000,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Movement::create([
            'movement_id' => 3,
            'user_id' => 2,
            'card_id' => 1,
            'movement_type' => 3,
            'movement_amount' => 1000,
            'created_at' => now(),
            'updated_at' => now()
        ]);


        Movement::create([
            'movement_id' => 4,
            'user_id' => 2,
            'card_id' => 3,
            'movement_type' => 4,
            'movement_amount' => 1000,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        Movement::create([
            'movement_id' => 5,
            'user_id' => 2,
            'card_id' => 3,
            'movement_type' => 1,
            'movement_amount' => 500,
            'created_at' => now(),
            'updated_at' => now()
        ]);



        Movement::create([
            'movement_id' => 6,
            'user_id' => 3,
            'card_id' => 2,
            'movement_type' => 5,
            'movement_amount' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
