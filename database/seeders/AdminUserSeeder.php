<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = new User;
            $user->name = 'Ria';
            $user->email = 'ria@gmail.com';
            $user->password = Hash::make('123456');
            $user->role = 'admin';
            $user->telepon = '6289681136117';
            $user->save();
    }
}
