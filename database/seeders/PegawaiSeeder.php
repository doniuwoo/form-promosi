<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 1000; $i++) {
            Pegawai::create([
                'nip' => $faker->unique()->numerify('PGA########'),
                'nama' => $faker->name,
                'nomer_telepon' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
                'alamat' => $faker->address,
                'tanggal_lahir' => $faker->date('Y-m-d', '2000-01-01'),
                'gender' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            ]);
        }
    }
}
