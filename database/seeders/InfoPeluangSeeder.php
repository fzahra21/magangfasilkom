<?php

namespace Database\Seeders;

use App\Models\InfoPeluang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class InfoPeluangSeeder extends Seeder
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

                InfoPeluang::create([
                    'namamitra' => $faker->company(),
                    'posisi' => $faker->jobTitle(),
                    'alamatmitra' => $faker->address()
                ]);

    	}
    }
}