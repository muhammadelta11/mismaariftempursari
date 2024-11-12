<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPengalamanOrganisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_pengalaman_organisasis')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'HMJ TI',
            'dari' => '2022',
            'sampai' => '',
            'jabatan' => 'Devisi Minat Dan Bakat',
            'keterangan' => NULL,
            'anggota_id' => '1',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:16:22',
        ]);
        DB::table('anggota_pengalaman_organisasis')->updateOrInsert([
            'id' => '58',
        ], [
            'nama' => 'OSIM MA IBS',
            'dari' => '2020',
            'sampai' => '2021',
            'jabatan' => 'Wakil Ketua OSIM',
            'keterangan' => NULL,
            'anggota_id' => '310',
            'created_at' => '2023-10-30 17:39:47',
            'updated_at' => '2023-10-30 17:39:47',
        ]);
        DB::table('anggota_pengalaman_organisasis')->updateOrInsert([
            'id' => '59',
        ], [
            'nama' => 'HMJTI',
            'dari' => '2022',
            'sampai' => '2023',
            'jabatan' => 'Bendahara II',
            'keterangan' => NULL,
            'anggota_id' => '310',
            'created_at' => '2023-10-30 17:40:22',
            'updated_at' => '2023-10-30 17:40:22',
        ]);
    }
}
