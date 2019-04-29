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
        $user = new User();
        $user->name = 'John Alvaro';
        $user->email = 'jhon54plex@gmail.com';
        $user->rol = 'Admin';
        $user->password = bcrypt('qwe123');
        $user->save();

        $user = new User();
        $user->name = 'John Hernandez';
        $user->email = 'desarrollo@minutodedios.tv';
        $user->rol = 'Admin';
        $user->password = bcrypt('12345');
        $user->save();
    }
}
