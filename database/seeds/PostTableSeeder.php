<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 50)
            -> create()
            -> each(function($post){
                $comments=factory(Comment::class, 2)->make();
                $post->comments()->saveMany($comments);
            });
    }
}
