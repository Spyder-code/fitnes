<?php

use App\User;
use Illuminate\Database\Seeder;
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
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@yahoo.com',
            'password' => Hash::make('admin123'),
            'image' => 'default.jpg',
            'jenis_kelamin' => 'LK',
            'no_id' => 'FN29110'
        ]);

        $admin->assignRole('admin');

        $member = User::create([
            'name' => 'Member',
            'email' => 'member@yahoo.com',
            'password' => Hash::make('member123'),
            'image' => 'default.jpg',
            'jenis_kelamin' => 'PR',
            'status' => 0,
            'no_id' => 'FN29111'
        ]);

        $member->assignRole('member');
    }
}
