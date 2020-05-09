<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_system_user')->insert([
            'first_name' => env('DEFAULT_FIRST_NAME'),
            'last_name' => env('DEFAULT_LAST_NAME'),
            'full_name' => env('DEFAULT_FIRST_NAME').' '.env('DEFAULT_LAST_NAME'),
            'username' => env('DEFAULT_USERNAME'),
            'email' => env('DEFAULT_EMAIL'),
            'phone_number' => env('DEFAULT_PHONE_NUMBER'),
            'password' => bcrypt(env('DEFAULT_PASSWORD')),
            'gender' => env('DEFAULT_GENDER'),
            'is_active' => 1,
            'is_super' => 1
        ]);
    }
}
