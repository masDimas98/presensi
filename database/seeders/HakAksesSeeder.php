<?php

namespace Database\Seeders;

use App\Models\HakAkses;
use Illuminate\Database\Seeder;

class HakAksesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hakakses = array(
            ['user_akses_id' => '1', 'page_akses_id' => '1', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '2', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '3', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '4', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '5', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '6', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '7', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '8', 'aktif' => '1'],
            ['user_akses_id' => '1', 'page_akses_id' => '9', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '1', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '2', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '3', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '4', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '5', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '6', 'aktif' => '1'],
            ['user_akses_id' => '2', 'page_akses_id' => '7', 'aktif' => '0'],
            ['user_akses_id' => '2', 'page_akses_id' => '8', 'aktif' => '0'],
            ['user_akses_id' => '2', 'page_akses_id' => '9', 'aktif' => '0'],
            ['user_akses_id' => '3', 'page_akses_id' => '1', 'aktif' => '0'],
            ['user_akses_id' => '3', 'page_akses_id' => '2', 'aktif' => '1'],
            ['user_akses_id' => '3', 'page_akses_id' => '3', 'aktif' => '1'],
            ['user_akses_id' => '3', 'page_akses_id' => '4', 'aktif' => '1'],
            ['user_akses_id' => '3', 'page_akses_id' => '5', 'aktif' => '1'],
            ['user_akses_id' => '3', 'page_akses_id' => '6', 'aktif' => '1'],
            ['user_akses_id' => '3', 'page_akses_id' => '7', 'aktif' => '0'],
            ['user_akses_id' => '3', 'page_akses_id' => '8', 'aktif' => '0'],
            ['user_akses_id' => '3', 'page_akses_id' => '9', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '1', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '2', 'aktif' => '1'],
            ['user_akses_id' => '4', 'page_akses_id' => '3', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '4', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '5', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '6', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '7', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '8', 'aktif' => '0'],
            ['user_akses_id' => '4', 'page_akses_id' => '9', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '1', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '2', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '3', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '4', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '5', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '6', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '7', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '8', 'aktif' => '0'],
            ['user_akses_id' => '5', 'page_akses_id' => '9', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '1', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '2', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '3', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '4', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '5', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '6', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '7', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '8', 'aktif' => '0'],
            ['user_akses_id' => '6', 'page_akses_id' => '9', 'aktif' => '0'],
        );

        foreach ($hakakses as $akses) {
            HakAkses::create($akses);
        }
    }
}
