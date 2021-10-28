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
            'st_id' => 1,
            'st_name' => 'Agua',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'st_id' => 2,
            'st_name' => 'Luz',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'st_id' => 3,
            'st_name' => 'Gas',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'st_id' => 4,
            'st_name' => 'Internet',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'st_id' => 5,
            'st_name' => 'Tarjeta',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        ServiceType::create([
            'st_id' => 6,
            'st_name' => 'Otros',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
