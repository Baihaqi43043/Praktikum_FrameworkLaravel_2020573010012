<?php

namespace Database\Factories;

use App\Models\Peminjaman;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tanggal' => now(),
            'jumlah' => $this->faker->numberBetween($min = 50000, $max = 300000),
            'keterangan' => $this->faker->text(10)
        ];
    }
}
