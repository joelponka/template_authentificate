<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'Admin',
            'last_name' => 'MK',
            'email' => 'admin@admin.com',
            'password' => 'password',
            'phone_number' => '656959165',
            'active'=> 1
        ]);
        $user->assignRole('administrator');

        $user = User::create([
            'name' => 'Manager',
            'last_name' => 'Jo',
            'email' => 'manager@manager.com',
            'password' => 'password',
            'phone_number' => '696686696',
            'active'=> 1
        ]);
        $user->assignRole('manager');
    }
}
