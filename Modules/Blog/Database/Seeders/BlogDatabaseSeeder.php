<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use \Modules\Blog\Entities\Post;
use \Modules\Blog\Entities\Category;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Category::create([
            'en'=> ['slug'=> 'uncategorized',
            'title'=> 'Uncategorized'],
            'fa'=> ['slug'=> 'دسته-بندی-نشده',
            'title'=> 'دسته بندی نشده']
        ]);
        Category::create([
            'en'=> ['slug'=> 'news',
            'title'=> 'News'],
            'fa'=> ['slug'=> 'اخبار',
            'title'=> 'اخبار']
        ]);
        Post::factory()->count(5)->create();
    }
}
