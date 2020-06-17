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
        $user = new \App\User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('1234');
        $user->role  = \App\Http\Controllers\RoleConstant::ADMIN;
        $user->save();

        $user = new \App\User();
        $user->name = 'manager';
        $user->email = 'manager@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('1234');
        $user->role  = \App\Http\Controllers\RoleConstant::MANAGEMENT;
        $user->save();

        $user = new \App\User();
        $user->name = 'hang';
        $user->email = 'hang@gmail.com';
        $user->password = \Illuminate\Support\Facades\Hash::make('1234');
        $user->role  = \App\Http\Controllers\RoleConstant::CUSTOMER;
        $user->save();

    }
}
