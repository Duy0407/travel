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
        Schema::create('restaurant_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_category'); // ID Category nhà hàng
            $table->string('productName');
            $table->integer('productPrice')->nullable();
            $table->string('productAvatar');
            $table->string('productDescription');
            $table->foreign('id_category')->references('id')->on('restaurant_category');
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
        Schema::dropIfExists('restaurant_products');
    }
};
