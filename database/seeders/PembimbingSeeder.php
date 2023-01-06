<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PembimbingSeeder extends Seeder
{
    public function run()
    {

    	$faker = Faker::create('id_ID');
    	for($i = 1; $i <= 50; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pembimbings')->insert([
    			'nama' => $faker->name(),
    		]);
    	}
    }
}