<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_detail_id');
            $table->string('name_image');
            $table->string('url');
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('update_date')->nullable()->useCurrentOnUpdate();

            $table->foreign('product_detail_id')->references('id')->on('product_details')->onDelete('cascade');
            // Chú ý: Trong migration này, tôi giả sử rằng product_detail_id là khóa ngoại tham chiếu đến bảng product_details. Bạn cần điều chỉnh tên bảng nếu nó khác.
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
