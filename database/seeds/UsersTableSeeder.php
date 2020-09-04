<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::create([
            "name" => "code_the_guy",
            "email" => "codetheguy@admin.com",
            "password" => Hash::make("password")
        ]);
    }
}
