<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PricelistImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [];

        for ($i = 1; $i < 100; $i++) {
            $image_title = "Image №" . $i;
            //$parent_id = ($i>4)? rand(1,4) : 1;
            $images[] = [
                'title' => $image_title,
                'path' => "/images/DB/"
            ];
        }

        DB::table('pricelist_images')->insert($images);
    }
}