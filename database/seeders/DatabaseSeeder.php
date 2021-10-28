<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RoleSeeder::class]);
        $this->call([UserSeeder::class]);
        $this->call([CardSeeder::class]);
        $this->call([MovementTypeSeeder::class]);
        $this->call([ServiceTypeSeeder::class]);
    }
}
