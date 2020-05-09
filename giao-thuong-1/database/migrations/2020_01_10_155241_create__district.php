<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrict extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_district', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('code', 50)->nullable();
            $table->string('name', 255);
            $table->string('type', 50)->nullable();
            $table->string('location', 255)->nullable();
            $table->integer('province_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_district');
    }
}
