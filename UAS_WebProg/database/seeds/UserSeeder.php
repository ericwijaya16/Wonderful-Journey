<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'admin',
                'email'=>'admin@test.com',
                'password'=>Hash::make('admin1234'),
                'phone'=>'08192094121',
                'role'=>'admin',
            ],[
                'name'=>'user',
                'email'=>'user@test.com',
                'password'=>Hash::make('123456789'),
                'phone'=>'0814821931',
                'role'=>'user'
            ],[
                'name'=>'user2',
                'email'=>'user2@test.com',
                'password'=>Hash::make('12345678'),
                'phone'=>'02128541983',
                'role'=>'user'
            ]
        ]);
    }
}
