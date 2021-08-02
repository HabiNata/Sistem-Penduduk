<?php

namespace Database\Seeders;

use App\Models\DataPenduduk;
use Illuminate\Database\Seeder;

class DataPendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPenduduk::factory()->count(1000)->create();
    }
}
