<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "this is the frist title",
            'content' => "Dumy Content Dumy Content Dumy Content Dumy Content Dumy Content",
            'thumbnial_path' => "image_63a52a13a92434.23625471seBzMwCY3Y.jpg",
        ],
        [
            'user_id' => 2,
            'category_id' => 2,
            'title' => "this is the 2nd title",
            'content' => "Dumy Content2 Dumy Content 2Dumy Content 2Dumy Content2 Dumy Content",
            'thumbnial_path' => "image_63a52a13a92434.23625471seBzMwCY3Y.jpg",
        ]);
    }
}
