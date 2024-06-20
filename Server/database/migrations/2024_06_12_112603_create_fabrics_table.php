<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('fabrics')) {
            Schema::create('fabrics', function (Blueprint $table) {
                $table->id();
                $table->string('fabric');
                $table->timestamp('create_date')->nullable();
                $table->timestamp('update_date')->nullable();
                $table->timestamps(); // Remove this line if you don't need timestamps
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabrics');
    }
}
