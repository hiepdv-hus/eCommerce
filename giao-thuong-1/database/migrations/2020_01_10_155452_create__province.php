<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvince extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_province', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('code', 50)->nullable();
            $table->string('name', 150);
            $table->string('type', 50)->nullable();
            $table->integer('order_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_province');
    }
}
