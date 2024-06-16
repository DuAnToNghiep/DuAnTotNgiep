<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('news_title');
            $table->string('news_image')->nullable();
            $table->longText('news_content');
            $table->timestamps();
            $table->string('status');
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
