<?php

use App\User;
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
        User::truncate();
        User::create(array('name' => 'Administrator',
            'email' => 'admin@datoriki.runa',
            'password' => bcrypt('secret'),
            'role' => 2));
    }
}
