<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;
use App\Components\ImportDataClient;

class ImportJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:jsonplaceholder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get data from JsonPlaceholder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $import = new ImportDataClient();

        $response = $import->client->request('GET', 'posts');

        $data = json_decode($response->getBody()->getContents());
    
        foreach ($data as $post) {
            Article::firstOrCreate([
                'title'=>$post->title,
            ],[
                'title'=>$post->title,
                'content'=>$post->body,
                'category_id'=>3,
            ]);
        }
    dd('finish');
    
    }
}
