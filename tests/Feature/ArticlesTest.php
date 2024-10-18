<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ArticlesTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test  */
    public function a_user_can_browse_articles()
    {
        $response = $this->get('/articles');
        $response->assertStatus(200);
    }

    /** @test  */
    public function a_user_can_create_article()
    {
        $response = $this->post('/articles', [
            'title'=>'test title',
            'content'=>'test content',
            'image'=>'testimg.jpg',
        ]);
        $response->assertStatus(302);
    }
    
}