<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mas Operator',
                'email'=>'operator@example.com',
                'password'=>bcrypt('operator123'),
                'role'=>'operator',
                'jabatan'=>'marbot',
            ],
            [
                'name'=>'Mas Superadmin',
                'email'=>'superadmin@example.com',
                'password'=>bcrypt('superadmin123'),
                'role'=>'superadmin',
                'jabatan'=>'wakasek sarpras',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
