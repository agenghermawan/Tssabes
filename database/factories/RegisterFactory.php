<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RegisterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = array(['Laki Laki','Perempuan']);
        $randomGender = array_rand($gender);
        return [
          'namaLengkap' => $this->faker->name(),
            'email' => $this->faker->email(),
            'tempatLahir' => $this->faker->city(),
            'tanggalLahir' => $this->faker->dateTime(),
            'jenisKelamin' => $this->faker->randomElement(['Laki Laki','Perempuan']),
            'usia' => rand('10','30'),
            'tinggiBadan' => rand('150','180'),
            'beratBadan' => rand('50','80'),
            'agama' => 'Islam',
            'asalSekolah' => 'SDN 05 Pagi',
            'tingkatanSekolah' => 'Kelas 9',
            'unitLatihan' => 'Karate',
            'tingkatanSabuk' => 'Hitam',
            'riwayatKesehatan' => 'Sehat',
            'alamat' => $this->faker->address(),
            'noTelp' => $this->faker->sentence(1),
            'foto' => $this->faker->image(null, 640, 480),
            'akte' => $this->faker->image(null, 640, 480),
            'status' =>  $this->faker->randomElement(['Pendaftaran Baru','Pendaftaran Ulang']),
        ];
    }
}
