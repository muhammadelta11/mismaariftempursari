<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '1',
        ], [
            'jenis_id' => '2',
            'anggota_id' => '1',
            'dari' => '2007',
            'sampai' => '2013',
            'instansi' => 'MI',
            'jurusan' => NULL,
            'keterangan' => NULL,
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2024-02-27 21:24:25',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '2',
        ], [
            'jenis_id' => '3',
            'anggota_id' => '1',
            'dari' => '2016',
            'sampai' => '2019',
            'instansi' => 'SMP Teuku Umar Semarang',
            'jurusan' => NULL,
            'keterangan' => 'VII 2, VIII 1, IX 1',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:13:19',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '3',
        ], [
            'jenis_id' => '4',
            'anggota_id' => '1',
            'dari' => '2019',
            'sampai' => '2022',
            'instansi' => 'SMK N 2 Semarang',
            'jurusan' => 'Rekayasa Perangkat Lunak',
            'keterangan' => 'Kelas RPL 2',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:12:11',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '4',
        ], [
            'jenis_id' => '5',
            'anggota_id' => '1',
            'dari' => '2022',
            'sampai' => '2026',
            'instansi' => 'Universitas Wahid Hasyim',
            'jurusan' => 'S1 Teknik Infomatika',
            'keterangan' => 'Kelas A2 2022',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:10:54',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '254',
        ], [
            'jenis_id' => '5',
            'anggota_id' => '310',
            'dari' => '2022',
            'sampai' => '',
            'instansi' => 'Universitas Wahid Hasyim',
            'jurusan' => 'Teknik Informatika',
            'keterangan' => NULL,
            'created_at' => '2023-10-30 17:42:05',
            'updated_at' => '2023-10-30 17:42:05',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '255',
        ], [
            'jenis_id' => '4',
            'anggota_id' => '314',
            'dari' => '2019',
            'sampai' => '2022',
            'instansi' => 'SMKN 8 SEMARANG',
            'jurusan' => 'Multimedia',
            'keterangan' => NULL,
            'created_at' => '2023-10-31 12:15:46',
            'updated_at' => '2023-10-31 12:15:46',
        ]);
        DB::table('anggota_pendidikans')->updateOrInsert([
            'id' => '256',
        ], [
            'jenis_id' => '5',
            'anggota_id' => '314',
            'dari' => '2022',
            'sampai' => '',
            'instansi' => 'Universitas Wahid Hasyim',
            'jurusan' => 'Teknik Informatika',
            'keterangan' => NULL,
            'created_at' => '2023-10-31 12:26:31',
            'updated_at' => '2023-10-31 12:26:31',
        ]);
    }
}
