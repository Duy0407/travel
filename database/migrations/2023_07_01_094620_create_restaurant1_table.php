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
        Schema::create('restaurant1', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_business_type'); // Loại hình kinh doanh
            $table->string('restaurant_name'); // Tên nhà hàng
            $table->tinyInteger('service'); // Dịch vụ nhà hàng
            $table->tinyInteger('cuisine'); // Ẩm thực nhà hàng
            $table->string('avatar'); // Ảnh đại diện nhà hàng
            $table->time('timeStart')->nullable(); // Thời gian mở cửa
            $table->time('timeEnd')->nullable(); // Thời gian đóng cửa
            $table->tinyInteger('city');
            $table->tinyInteger('district');
            $table->string('address'); // Địa chỉ nhà hàng
            $table->text('restaurantIntroduce');
            $table->text('restaurantPolicy')->nullable();
            $table->timestamps();
            $table->foreign('id_business_type')->references('id')->on('business_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant1');
    }
};
