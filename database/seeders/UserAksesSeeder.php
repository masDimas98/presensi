<?php

namespace Database\Seeders;;

use App\Models\UserAkses;
use Illuminate\Database\Seeder;

class UserAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userakses = array([
            'nama' => 'Super Admin'
        ], [
            'nama' => 'Admin'
        ], [
            'nama' => 'Staf'
        ], [
            'nama' => 'Dosen'
        ], [
            'nama' => 'Mahasiswa'
        ], [
            'nama' => 'Non-akses'
        ]);

        foreach ($userakses as $user) {
            UserAkses::create($user);
        }
    }
}
