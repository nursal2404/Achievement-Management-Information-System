<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name'=>'Admin',
                'level'=>'admin',
                'password'=> bcrypt('123456'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}