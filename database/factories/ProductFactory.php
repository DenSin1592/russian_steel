<?php
/**
 * Created by PhpStorm.
 * User: Денис Грех
 * Date: 22.11.2019
 * Time: 13:28
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Models\PriceProductModel::class, function (Faker $faker) {
    $title_num = rand(1,10000);
    $text_size = rand(100, 1000);
    $title ='Изделие № ' . $title_num;
    $text = $faker->text($text_size);
    $excerpt = substr($text, 0 ,100);
    $price = 1.11 + (rand(1000,100000));
    $is_added = rand(1,5)>1;
    return [
        'category_id' => rand(2,6),
        //'image_id' => ((rand(1,4) > 1 )? 1 : 2),
        'title' => $title,
        'slug' => Str::slug($title),
        'price' => $price,
        'excerpt' => $excerpt,
        'content_row' => $text,
        'content_html' => $text,
        'is_added' => $is_added,
        'added_at' => (($is_added) ? $faker->dateTimeBetween("NOW", "+ 2 days") : null)
    ];
});