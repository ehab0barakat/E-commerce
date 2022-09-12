<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger("category_id"); //can delete that column
            $table->foreign("category_id")->references("id")->on("categorys_products")->onDelete("cascade"); //can delete that line

            $table->unsignedBigInteger("subcategory_id");
            $table->foreign("subcategory_id")->references("id")->on("subcategorys_products")->onDelete("cascade");

            $table->enum('status', ['male', 'female', 'mix'])->default('mix');

            $table->unsignedBigInteger("price");
            $table->unsignedBigInteger("rate");
            $table->unsignedBigInteger("quantity");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
