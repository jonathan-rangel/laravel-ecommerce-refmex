<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Http\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
            'tipo' => 0,
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('useruser'),
            'tipo' => 1,
        ]);
    }
}
