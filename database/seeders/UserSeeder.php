<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        'name' => 'suraj',
        'email' => 's@gmail.com',
        'password' => Hash::make("1234"),
        ];
        User::create($data);
    }
}
