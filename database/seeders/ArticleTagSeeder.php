<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('article_tag')->insert([
            'article_id'=>1,
            'tag_id'=>2,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>2,
            'tag_id'=>2,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>3,
            'tag_id'=>2,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>4,
            'tag_id'=>3,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>5,
            'tag_id'=>3,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>1,
            'tag_id'=>3,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>1,
            'tag_id'=>1,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>2,
            'tag_id'=>3,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>5,
            'tag_id'=>4,
        ]);
        DB::table('article_tag')->insert([
            'article_id'=>5,
            'tag_id'=>1,
        ]);
    }
}
