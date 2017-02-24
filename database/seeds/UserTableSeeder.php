<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name' => 'Tony',
            'email'    => 'tony@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}