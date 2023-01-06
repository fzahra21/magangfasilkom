<?php

namespace Database\Seeders;

use App\Models\Bimbingan;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	for($i = 1; $i <= 50; $i++){

                Bimbingan::create([
                    'email' => $faker->email(),
                    'npm' => $faker->numerify('#############'),
                    'nama' => $faker->name(),
                    'posisi' => $faker->jobTitle(),
                    'namamitra' => $faker->company(),
                    'pembimbing' => $faker->firstName. " ".$faker->lastName
                ]);

    	}
    }
}