<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'category_id' => 1,
            'photo' => 'assets/img/smart_parking.svg',
            'description' => '-',
            'name' => 'Project - Mall',
            'location' => 'Koja Trade Mall'
        ]);
    }
}
