<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        User::create([ 'name' => 'Narahari S', 'password' => bcrypt('secret'), 'email' => 'nsundaragopalan@unomaha.edu']);
        User::create([ 'name' => 'George Royce', 'password' => bcrypt('secret'), 'email' => 'groyce@unomaha.edu']);
    }
}