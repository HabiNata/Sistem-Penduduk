<?php

namespace Database\Factories;

use App\Models\DataPenduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class DataPendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DataPenduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->randomNumber(),
            'no_kartu_keluarga' => $this->faker->randomNumber(),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->dateTimeBetween(),
            'alamat' => $this->faker->text(),
            'jenis_kelamin_id' => $this->faker->numberBetween(1, 2),
            'agama_id' => $this->faker->numberBetween(1, 6),
            'status_id' => $this->faker->numberBetween(1, 3),
            'pendidikan' => $this->faker->sentence(10),
            'pekerjaan' => $this->faker->sentence(10),
        ];
    }
}
