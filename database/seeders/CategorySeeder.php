<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'Mall'
            ],
            [
                'id' => 2,
                'name' => 'Ruang Public'
            ],
            [
                'id' => 3,
                'name' => 'Office'
            ],
            [
                'id' => 4,
                'name' => 'Our Partners'
            ],
            [
                'id' => 5,
                'name' => 'Pasar'
            ],
            [
                'id' => 6,
                'name' => 'Rumah Sakit'
            ],

        ]);
    }
}
