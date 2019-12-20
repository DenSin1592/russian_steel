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
            'parent_id' => 0,
            'description' => "Корневая категория"
        ];

        for ($i = 1; $i < 10; $i++ ){
            $cat_title = "Категория№".$i;
            //$parent_id = ($i>4)? rand(1,4) : 1;
            $categories[] = [
                'title' => $cat_title,
                'slug' => Str::slug($cat_title),
                'parent_id' => ($i<4) ? 1 : rand(2, 8),
                'description' => ("description " . $i ."description " . $i ."description " . $i ."description " . $i)
            ];
        }

        DB::table('pricelist_categories')->insert($categories);
    }
}
