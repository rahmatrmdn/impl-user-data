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
        User::create([
            'email' => hash('sha256','rahmay@gmail.com'),
            'name' => hash('sha256','rahmay'),
            'password' => \Hash::make('12345678'),
            'status' => 'aktif',
        ]);
    }
}
