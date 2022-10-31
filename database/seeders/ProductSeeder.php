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
            'category_id' => '1',
            'gambar' => 'rexushx9.png',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Barracuda Pro',
            'category_id' => '1',
            'gambar' => 'razerbarracudapro.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Iris HG19',
            'category_id' => '1',
            'gambar' => 'fantechiris.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'Asus ROG Delta S Animate',
            'category_id' => '1',
            'gambar' => 'roggdeltas.jpg',
            'merek_id' => '4',
        ]);

    
        // mouse seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Sierra X8',
            'category_id' => '2',
            'gambar' => 'rexussierrax8.jpg',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Naga',
            'category_id' => '2',
            'gambar' => 'razernaga.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech X11',
            'category_id' => '2',
            'gambar' => 'fantechx11.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Glaudius',
            'category_id' => '2',
            'gambar' => 'rogglaudius.jpg',
            'merek_id' => '4',
        ]);


        // keyboard seeder (4)
        DB::table('products')->insert([
            'nama' => 'Rexus Daxa M71',
            'category_id' => '3',
            'gambar' => 'rexusdaxam71.jpg',
            'merek_id' => '1',
        ]);

        DB::table('products')->insert([
            'nama' => 'Razer Black Widow V3',
            'category_id' => '3',
            'gambar' => 'razerblackwidv3.jpg',
            'merek_id' => '2',
        ]);

        DB::table('products')->insert([
            'nama' => 'Fantech Maxfit 61',
            'category_id' => '3',
            'gambar' => 'fantechmaxfit61.jpg',
            'merek_id' => '3',
        ]);

        DB::table('products')->insert([
            'nama' => 'ROG Claymoore',
            'category_id' => '3',
            'gambar' => 'rogclaymore.jpg',
            'merek_id' => '4',
        ]);
    }
}
