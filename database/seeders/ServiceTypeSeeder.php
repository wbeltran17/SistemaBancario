<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::create([
            'mt_id' => 1,
            'mt_name' => 'Agua',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'mt_id' => 2,
            'mt_name' => 'Luz',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'mt_id' => 3,
            'mt_name' => 'Gas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'mt_id' => 4,
            'mt_name' => 'Internet',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'mt_id' => 5,
            'mt_name' => 'Tarjeta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'mt_id' => 6,
            'mt_name' => 'Otros',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
