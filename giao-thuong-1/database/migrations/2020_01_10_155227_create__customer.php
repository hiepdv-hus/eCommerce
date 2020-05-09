<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('first_name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('full_name', 255);
            $table->string('phone_number', 25)->nullable();
            $table->string('email', 50)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->string('company', 255)->nullable();
            $table->string('tax_code', 50)->nullable();
            $table->string('avatar', 255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('company_address', 255)->nullable();
            $table->integer('rank_id')->unsigned()->nullable();
            $table->bigInteger('facebook_id')->unsigned()->nullable();
            $table->bigInteger('zalo_id')->unsigned()->nullable();
            $table->integer('user_create_id')->unsigned()->nullable();
            $table->integer('user_update_id')->unsigned()->nullable();
            $table->boolean('is_active')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('_customer');
    }
}
