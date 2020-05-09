<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('_customer', function (Blueprint $table) {
            DB::statement('ALTER TABLE `_customer` MODIFY `first_name` VARCHAR(50) DEFAULT NULL');
            DB::statement('ALTER TABLE `_customer` MODIFY `last_name` VARCHAR(50) DEFAULT NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
