<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(
            [
                'name' => "cat1",
                'category_slug' => Str::slug('cat1'),
            ],
            [
                'name' => "cat2",
                'category_slug' => Str::slug('cat2'),
            ]
        );
    }
}
