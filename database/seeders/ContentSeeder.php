<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'judul' =>  'Save Your Money',
            'gambar' =>  'assets\images\blog-thumb-01.jpg' 
        ]);

        DB::table('contents')->insert([
            'judul' =>  'Save World',
            'gambar' =>  'assets\images\blog-thumb-02.jpg' 
        ]);
    }
}
