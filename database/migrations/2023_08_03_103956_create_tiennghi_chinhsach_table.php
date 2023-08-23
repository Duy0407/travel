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
        Schema::create('tiennghi_chinhsach', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_restaurant'); // ID Nhà hàng
            $table->unsignedBigInteger('id_tiennghi'); // ID Tiện nghi
            $table->foreign('id_restaurant')->references('id')->on('restaurant1');
            $table->foreign('id_tiennghi')->references('id')->on('tiennghi');
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
        Schema::dropIfExists('tiennghi_chinhsach');
    }
};
