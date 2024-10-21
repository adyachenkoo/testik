<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insertOrIgnore([
            'title'=>'Космос',
        ]);
        DB::table('tags')->insertOrIgnore([
            'title'=>'Наука',
        ]);
        DB::table('tags')->insertOrIgnore([
            'title'=>'Итория',
        ]);
        DB::table('tags')->insertOrIgnore([
            'title'=>'Математика',
        ]);
    }
}
