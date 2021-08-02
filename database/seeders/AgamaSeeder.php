<?php

namespace Database\Seeders;

use App\Models\Agama;
use Illuminate\Database\Seeder;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['agama' => 'Kriten', 'created_at' => now(), 'updated_at' => now()],
            ['agama' => 'Muslim', 'created_at' => now(), 'updated_at' => now()],
            ['agama' => 'Katolik', 'created_at' => now(), 'updated_at' => now()],
            ['agama' => 'Hindu', 'created_at' => now(), 'updated_at' => now()],
            ['agama' => 'Buddha', 'created_at' => now(), 'updated_at' => now()],
            ['agama' => 'Konghucu', 'created_at' => now(), 'updated_at' => now()],
        ];

        Agama::insert($data);
    }
}
