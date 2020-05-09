<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 150);
            $table->text('description')->nullable();
            $table->integer('media_id')->nullable();
            $table->double('price', 15, 2);
            $table->double('special_price', 15, 2);
            $table->integer('package_id')->unsigned();
            $table->boolean('is_active')->unsigned()->nullable()->default(0);
            $table->integer('user_create_id')->unsigned()->nullable();
            $table->integer('user_update_id')->unsigned()->nullable();
            $table->boolean('is_deleted')->unsigned()->nullable()->default(0);
            $table->dateTime('created_time')->nullable();
            $table->dateTime('modified_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product');
    }
}
