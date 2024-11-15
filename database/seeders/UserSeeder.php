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
        User::create([
            'email' => 'admin@presensi.com',
            'name' => 'admin',
            'password' => Hash::make('123258'),
            'status' => 'aktif',
            'hakakses' => '1'
        ]);
    }
}
