<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Post::truncate();

        $admin->pages()->saveMany([
            new Post([
                'title' => 'Blog Post 1',
                'slug' => 'blog-post-1',
                'excerpt' => 'The first post is here.',
                'body' => 'This is the first blog post.'
            ]),
            new Post([
                'title' => 'Blog Post 2',
                'slug' => 'blog-post-2',
                'excerpt' => 'The second post is here.',
                'body' => 'This is the second blog post.'
            ]),
            new Post([
                'title' => 'Blog Post 3',
                'slug' => 'blog-post-3',
                'excerpt' => 'The third post is here.',
                'body' => 'This is the third blog post.'
            ]),
        ]);
    }
}
