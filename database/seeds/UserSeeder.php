<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        $user->name="Khin Sandar Myint";
        $user->email="khin123@gmail.com";
        $user->password=Hash::make('password');
        $user->save();

    }
}
