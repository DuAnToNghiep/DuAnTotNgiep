<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('bill_id');
            $table->date('date_bill');
            $table->string('payment_method');
            $table->integer('cash')->nullable();
            $table->integer('transfer')->nullable();
            $table->integer('transfer_vnp')->nullable();
            $table->integer('total_amount');
            $table->longText('description')->nullable();
            $table->timestamp('create_date')->useCurrent();
            $table->timestamp('update_date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->index('bill_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
