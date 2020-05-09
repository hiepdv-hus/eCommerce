<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_error_log', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->text('action');
            $table->text('method');
            $table->text('ip_address')->nullable();
            $table->text('error_message')->nullable();
            $table->dateTime('created_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_error_log');
    }
}
