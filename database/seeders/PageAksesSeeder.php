<?php

namespace Database\Seeders;

use App\Models\PageAkses;
use Illuminate\Database\Seeder;

class PageAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageakses = array([
            'nama' => 'User'
        ], [
            'nama' => 'Dosen'
        ], [
            'nama' => 'Mahasiswa'
        ], [
            'nama' => 'MataKuliah'
        ], [
            'nama' => 'Gedung'
        ], [
            'nama' => 'Kelas'
        ], [
            'nama' => 'PageAkses'
        ], [
            'nama' => 'HakAkses'
        ], [
            'nama' => 'UserAkses'
        ]);
        foreach ($pageakses as $page) {
            PageAkses::create($page);
        }
    }
}
