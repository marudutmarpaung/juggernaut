<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'root',
            'last_name' => 'root',
            'username' => 'root',
            'email' => 'root@gmail.com',
            'role' => 0,
            'password' => bcrypt('root'),
        ]);
    }
}
