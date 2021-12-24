<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'achmedislamic@outlook.com', 'email' => 'achmedislamic@outlook.com', 'email_verified_at' => now(), 'password' => bcrypt('achmedislamic@outlook.com')]);
    }
}
