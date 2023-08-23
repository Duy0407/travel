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
        Schema::create('restaurant_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant'); // ID Nhà hàng
            $table->string('categoryName');
            $table->string('categoryAvatar');
            $table->foreign('id_restaurant')->references('id')->on('restaurant1');
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
        Schema::dropIfExists('restaurant_category');
    }
};
