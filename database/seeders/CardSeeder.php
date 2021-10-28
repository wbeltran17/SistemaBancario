<?php

namespace Database\Seeders;

use App\Models\CardType;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CardType::create([
            'ct_id' => 1,
            'ct_name' => 'Master Card',
            'ct_range' => 'clásica',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CardType::create([
            'ct_id' => 2,
            'ct_name' => 'Master Card',
            'ct_range' => 'Oro',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CardType::create([
            'ct_id' => 3,
            'ct_name' => 'Visa',
            'ct_range' => 'Oro',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        CardType::create([
            'ct_id' => 4,
            'ct_name' => 'Visa',
            'ct_range' => 'Oro',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
