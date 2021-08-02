<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
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
        $this->call([
            UserSeeder::class,
            StatusSeeder::class,
            AgamaSeeder::class,
            JenisKelaminSeeder::class,
            DataPendudukSeeder::class,
        ]);
    }
}
