<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PricelistCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cat_title = "Корневая категория";

        $categories[] = [
            'title' => $cat_title,
            'slug' => Str::slug($cat_title) ,
            'parent_id' => 0
        ];

        for ($i = 1; $i < 4; $i++ ){
            $cat_title = "Категория№".$i;
            //$parent_id = ($i>4)? rand(1,4) : 1;
            $categories[] = [
                'title' => $cat_title,
                'slug' => Str::slug($cat_title),
                'parent_id' => 0
            ];
        }

        DB::table('blog_categories')->insert($categories);
    }
}
