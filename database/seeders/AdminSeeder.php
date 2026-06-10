<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'fio' => 'Администратор',
            'phone' => '89999999999',
            'login' => 'administrator',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('administrator'),
            'role'=> 'admin'
        ]);
    }
}