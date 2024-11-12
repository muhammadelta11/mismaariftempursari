<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPendidikanJenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'TK/PAUD DLL',
            'keterangan' => 'Pendidikan Kanak Kanak',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'SD/MI (Dasar)',
            'keterangan' => 'Sekolah Dasar',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Sekolah Lanjut Tingkat Pertama',
            'keterangan' => 'Sekolah Lanjut Tingkat Pertama',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Sekolah Lanjut Tingkat Atas',
            'keterangan' => 'Sekolah Lanjut Tingkat Atas',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'Perguruan Tinggi',
            'keterangan' => 'Perguruan Tinggi',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
        DB::table('anggota_pendidikan_jenis')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'Lainnya',
            'keterangan' => 'Pendidikan resmi lainnya',
            'status' => '1',
            'created_at' => '2023-02-11 00:09:21',
            'updated_at' => '2023-02-11 00:09:21',
        ]);
    }
}
