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
        // Таблица "disk"
        Schema::create('disk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('disk_cost');
            $table->string('disk_name', 100);
            $table->string('category', 100);
            $table->string('description', 250);
			 $table->softDeletes();
        });

        // Таблица "order"
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->date('order_date');
            $table->integer('total_price');
            $table->string('return_date', 10);
            $table->unsignedInteger('disk_id');
            $table->foreign('disk_id')->references('id')->on('disk')->onDelete('cascade');
			 $table->softDeletes();
        });

        // Таблица "additions"
        Schema::create('additions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fine')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('lease_extension')->nullable();
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
			 $table->softDeletes();
        });

        // Таблица "passport"
        Schema::create('passport', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_sur', 100);
            $table->date('birth_date');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
			 $table->softDeletes();
        });

        // Таблица "delivery"
        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->date('delivery_date')->nullable();
            $table->string('address', 100);
            $table->integer('price');
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
			 $table->softDeletes();
        });

        // Таблица "client"
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('phone_number', 30)->unique();
            $table->string('client_name', 20);
            $table->unsignedInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
			 $table->softDeletes();
        });

        // Таблица "comments"
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rating');
            $table->date('adding_date');
            $table->string('review', 150);
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('disk_id');
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('disk_id')->references('id')->on('disk')->onDelete('cascade');
			 $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
        Schema::dropIfExists('client');
        Schema::dropIfExists('delivery');
        Schema::dropIfExists('passports');
        Schema::dropIfExists('additions');
        Schema::dropIfExists('order');
        Schema::dropIfExists('disk');
    }
};
