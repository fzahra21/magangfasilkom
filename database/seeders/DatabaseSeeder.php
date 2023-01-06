<?php

namespace Database\Seeders;

use App\Models\InfoPeluang;
use App\Models\Pembimbing;
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
        $this->call(InfoPeluangSeeder::class);
        $this->call(PembimbingSeeder::class);
        $this->call(BimbinganSeeder::class);
    }
}