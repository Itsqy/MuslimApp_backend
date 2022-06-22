<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin = new User();
        // $admin->name = 'Admin';
        // $admin->email = 'admin@gmail.com';
        // $admin->role = 'admin';
        // $admin->password = bcrypt('admin');
        // $admin->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->role = 'user';
        $user->password = bcrypt('user');
        $user->save();
    }
}
