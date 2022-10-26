<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Rexus Thundervox HX9',
            'jenis' => 'Headset',
            'gambar' => 'pc.png',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Barracuda Pro',
            'jenis' => 'Headset',
            'gambar' => 'pc.png',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Iris HG19',
            'jenis' => 'Headset',
            'gambar' => 'pc.png',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Asus ROG Delta S Animate',
            'jenis' => 'Headset',
            'gambar' => 'pc.png',
            'merek_id' => '4',
        ]);
    }
}
