<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PricelistImagesTableSeeder::class);
        $this->call(PricelistCategoryTableSeeder::class);
        factory(\App\Models\PriceProductModel::class, 100)->create();
    }
}
