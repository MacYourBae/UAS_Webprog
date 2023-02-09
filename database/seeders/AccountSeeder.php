<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => "Admin",
            'last_name' => "Udin",
            'email' => "admin@gmail.com",
            'display_picture_link' => "https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y",
            'password' => Hash::make("admin"),
        ]);

        DB::table('accounts')->insert([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => "User",
            'last_name' => "Jamal",
            'email' => "user@gmail.com",
            'display_picture_link' => "https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y",
            'password' => Hash::make("customer"),
        ]);
    }
}
