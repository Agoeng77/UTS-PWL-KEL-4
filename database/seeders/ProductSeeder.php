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
        // headset seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Thundervox HX9',
            'jenis' => 'Headset',
            'gambar' => 'rexushx9.png',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Barracuda Pro',
            'jenis' => 'Headset',
            'gambar' => 'razerbarracudapro.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Iris HG19',
            'jenis' => 'Headset',
            'gambar' => 'fantechiris.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Asus ROG Delta S Animate',
            'jenis' => 'Headset',
            'gambar' => 'roggdeltas.jpg',
            'merek_id' => '4',
        ]);

    
        // mouse seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Sierra X8',
            'jenis' => 'Mouse',
            'gambar' => 'rexussierrax8.jpg',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Naga',
            'jenis' => 'Mouse',
            'gambar' => 'razernaga.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech X11',
            'jenis' => 'Mouse',
            'gambar' => 'fantechx11.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Glaudius',
            'jenis' => 'Mouse',
            'gambar' => 'rogglaudius.jpg',
            'merek_id' => '4',
        ]);


        // keyboard seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Daxa M71',
            'jenis' => 'Keyboard',
            'gambar' => 'rexusdaxam71.jpg',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Black Widow V3',
            'jenis' => 'Keyboard',
            'gambar' => 'razerblackwidv3.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Maxfit 61',
            'jenis' => 'Keyboard',
            'gambar' => 'fantechmaxfit61.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Claymoore',
            'jenis' => 'Keyboard',
            'gambar' => 'rogclaymore.jpg',
            'merek_id' => '4',
        ]);
    }
}
