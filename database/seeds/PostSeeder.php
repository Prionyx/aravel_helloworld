<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class)->create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'seo_title' => 'Post 1',
            'user_id' => 1,
            'image' => 'laravel-example/public/files/img01.jpg',
        ]);

        factory(Post::class)->create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'seo_title' => 'Post 2',
            'user_id' => 1,
            'image' => 'laravel-example/public/files/img02.jpg',
        ]);

        sleep(2);

        factory(Post::class)->create([
            'title' => 'Post 3',
            'slug' => 'post-3',
            'seo_title' => 'Post 3',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img03.jpg',
        ]);

        factory(Post::class)->create([
            'title' => 'Post 4',
            'slug' => 'post-4',
            'seo_title' => 'Post 4',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img04.jpg',
        ]);

        factory(Post::class)->create([
            'title' => 'Post 5',
            'slug' => 'post-5',
            'seo_title' => 'Post 5',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img05.jpg',
        ]);

        factory(Post::class)->create([
            'title' => 'Post 6',
            'slug' => 'post-6',
            'seo_title' => 'Post 6',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img06.jpg',
        ]);

        factory(Post::class)->create([
            'title' => 'Post 7',
            'slug' => 'post-7',
            'seo_title' => 'Post 7',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img07.png',
        ]);

        sleep(2);

        factory(Post::class)->create([
            'title' => 'Post 8',
            'slug' => 'post-8',
            'seo_title' => 'Post 8',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img08.jpg',
        ]);

        Post::create([
            'title' => 'Post 9',
            'slug' => 'post-9',
            'seo_title' => 'Post 9',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img09.jpg',
            'meta_description' => 'Aperiam molestiae ut sed vel harum nulla vel.',
            'meta_keywords' => 'minus,facilis,quo',
            'excerpt' => 'Consequatur sequi temporibus enim. Neque atque quo et rerum. Nihil quis maxime eos aut qui modi. Eos illo iste quaerat voluptatem illum.',
            'body' => 'Asperiores dicta necessitatibus ea. Veritatis beatae similique accusantium ad omnis. Nihil laudantium quo dolor expedita. Quia qui voluptas ipsa omnis magni et aut voluptatem. Et molestiae explicabo delectus voluptas voluptates.',
            'active' => true,
        ]);

        factory(Post::class)->create([
            'title' => 'Post 10',
            'slug' => 'post-10',
            'seo_title' => 'Post 10',
            'user_id' => 2,
            'image' => 'laravel-example/public/files/user2/img10.jpg',
        ]);
    }
}
