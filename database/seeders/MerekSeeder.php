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
            'gambar' => 'Rexuz.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'Razer',
            'gambar' => 'razerr.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'Fantech',
            'gambar' => 'Fantech.png',
        ]);

        DB::table('mereks')->insert([
            'nama' => 'ROG',
            'gambar' => 'Rog.png',
        ]);
    }
}
