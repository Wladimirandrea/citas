<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Wladimir',
            'email' => 'wladimirandrea@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456789'), // password
            'cedula' => '17373687',
            'address' => 'calle 11',
            'phone' => '3024232053',
            'role' => 'admin',
        ]);
        User::factory()->count(50)->create();
    }
}
