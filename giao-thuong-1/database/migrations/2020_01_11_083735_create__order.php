<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_order', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->double('total', 15, 2)->unsigned()->nullable()->default(0);
            $table->double('grand_total', 15, 2)->unsigned()->nullable()->default(0);
            $table->double('tax', 15, 2)->unsigned()->nullable()->default(0);
            $table->double('discount', 15, 2)->unsigned()->nullable()->default(0);
            $table->text('customer_note')->nullable();
            $table->text('user_note')->nullable();
            $table->integer('customer_id')->unsigned();
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
        Schema::dropIfExists('_order');
    }
}
