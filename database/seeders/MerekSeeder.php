<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mereks')->insert([
            'nama' => 'Rexus',
            'gambar' => 'rexus.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'Razer',
            'gambar' => 'razer.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'Fantech',
            'gambar' => 'fantech.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'Asus',
            'gambar' => 'asus.png',
        ]);
    }
}
