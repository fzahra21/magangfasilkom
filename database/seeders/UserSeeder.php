<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create('id_ID');
    	for($i = 1; $i <= 5; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('users')->insert([
    			'nama' => $faker->name(),
    			'email' => $faker->email(),
    			'password' => $faker->password()
    		]);
    	}
    }
}