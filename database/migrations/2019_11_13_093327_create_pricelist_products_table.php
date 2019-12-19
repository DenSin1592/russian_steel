<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelist_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->unsignedBigInteger('image_id')->unsigned()->default(1);
            $table->string('title',100)->unique();
            $table->string('slug',100)->unique();
            $table->float('price',12,2);
            $table->text('excerpt')->nullable();
            $table->text('content_row');
            $table->text('content_html');
            $table->boolean('is_added')->default(false);
            $table->timestamp('added_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('pricelist_categories');
            //$table->foreign('image_id')->references('id')->on('pricelist_images');
            $table->index('is_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricelist_products');
    }
}
