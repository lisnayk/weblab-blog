<?php

use Illuminate\Database\Seeder;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Article::class, 50)->create()->each(function ($article) {
            /** @var \App\Article  $article*/
            //$article->categories()->sync([rand(1,50), rand(1,50)]);
        });
    }
}
