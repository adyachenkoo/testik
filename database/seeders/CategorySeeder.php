<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insertOrIgnore([
            'title'=>'Видео',
        ]);
        DB::table('categories')->insertOrIgnore([
            'title'=>'Фото',
        ]);
        DB::table('categories')->insertOrIgnore([
            'title'=>'Гифки',
        ]);
    }
}
