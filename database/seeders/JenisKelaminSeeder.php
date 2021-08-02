<?php

namespace Database\Seeders;

use App\Models\JenisKelamin;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jenis_kelamin' => 'laki-laki', 'created_at' => now(), 'updated_at' => now()],
            ['jenis_kelamin' => 'perempuan', 'created_at' => now(), 'updated_at' => now()],
        ];

        JenisKelamin::insert($data);
    }
}
