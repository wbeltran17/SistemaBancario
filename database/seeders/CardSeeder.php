<?php

namespace Database\Seeders;

use App\Models\Card;
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



        Card::create([
            'card_id' => 1,
            'card_number' => '000000001',
            'card_type' => 'Visa',
            'card_reference' => 'Oro',
            'card_balance' => '1000',
            'card_credit' => '0',
            'card_status' => true,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Card::create([
            'card_id' => 2,
            'card_number' => '000000002',
            'card_type' => 'Visa',
            'card_reference' => 'Oro',
            'card_balance' => '1000',
            'card_credit' => '0',
            'card_status' => false,
            'user_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Card::create([
            'card_id' => 3,
            'card_number' => '000000003',
            'card_type' => 'MasterCard',
            'card_reference' => 'Oro',
            'card_balance' => '500',
            'card_credit' => '500',
            'card_status' => true,
            'user_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
