<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        $user = new User();
        $user->id = 1;
        $user->name = 'Brandon Carranza';
        $user->email = 'Brandon@hotmail.com';
        $user->password = bcrypt('qwerty');
        $user->save();
    }
}
