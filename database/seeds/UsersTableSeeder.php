<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = "Leone";
        $user->email = 'leone@gmail.com';
        $user->password = bcrypt('administrator');
        $user->save();
    }
}
