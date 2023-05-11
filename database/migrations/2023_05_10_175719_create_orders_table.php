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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index()->foreignId('user_id')->references('id')->on('users')->Constrained()->CascadeOnUpdate()->CascadeOnDelete();
            $table->string('name');
            $table->string('number');
            $table->string('email');
            $table->string('method');
            $table->string('address');
            $table->string('total_products');
            $table->integer('total_price');
            $table->dateTime('order_time');
            $table->dateTime('event_time');
            $table->string('order_status');
            $table->string('proof_payment');
            $table->string('payment_status');
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
        Schema::dropIfExists('orders');
    }
};
