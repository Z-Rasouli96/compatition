<?php

namespace App\Console\Commands;

use App\Models\News;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class newscomment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:newscomment';

    public $teslaArticle = "tesla";
    public $appleArticle = "apple";  

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //https://newsapi.org/
        
        $tesla = Http::get("https://newsapi.org/v2/everything?q='$this->teslaArticle'&from=2023-12-28&sortBy=publishedAt&apiKey=cebfa13305ec48a49fa463d1ec036eff")->json();

        $apple = Http::get("https://newsapi.org/v2/everything?q='$this->appleArticle'&from=2024-01-14&to=2024-01-27&sortBy=popularity&apiKey=cebfa13305ec48a49fa463d1ec036eff")->json();
    
        
        foreach ($tesla["articles"] as $keyapi => $value) {
           
         
              $news = News::create([
              'article' => $this->teslaArticle,
              'name' => $value["source"]["name"],
              'author' => $value["author"],
              'title' => $value["title"],
              'description' => $value["description"],
              'url' => $value["url"],
              'urlToImage' => $value["urlToImage"],
              'publishedAt' => $value["publishedAt"],
              'content' => $value["content"],
          ]);
    
        }
    
        foreach ($apple["articles"] as $keyapi => $value) {
           
    
          $news = News::create([
            'article' => $this->appleArticle,
            'name' => $value["source"]["name"],
            'author' => $value["author"],
            'title' => $value["title"],
            'description' => $value["description"],
            'url' => $value["url"],
            'urlToImage' => $value["urlToImage"],
            'publishedAt' => $value["publishedAt"],
            'content' => $value["content"],
        ]);
    
      }
    }
}
