<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory(5)->create();
        $tags = Tag::factory(10)->create();
        $articles = Article::factory(25)->create();

        foreach($articles as $article) {
            $tagsIds = $tags->random(5)->pluck('id'); 
            $article->tags()->attach('1');
        }
    }
}
