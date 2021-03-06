<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_media', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->enum('mime_type', ['image/png', 'image/jpeg', 'image/gif']);
            $table->string('name', 125);
            $table->float('size');
            $table->string('url', 255);
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
        Schema::dropIfExists('_media');
    }
}
