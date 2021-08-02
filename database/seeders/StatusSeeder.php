<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['status' => 'Pelajar', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Menikah', 'created_at' => now(), 'updated_at' => now()],
            ['status' => 'Lajang', 'created_at' => now(), 'updated_at' => now()],
        ];

        Status::insert($data);
    }
}
