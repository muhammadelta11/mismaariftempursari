<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaKontakJenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_kontak_jenis')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'Facebook',
            'icon' => 'fab fa-facebook-f',
            'keterangan' => 'Sosial Media',
            'status' => '1',
            'created_at' => '2023-02-11 00:07:45',
            'updated_at' => '2023-02-11 00:07:45',
        ]);
        DB::table('anggota_kontak_jenis')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Twitter',
            'icon' => 'fab fa-twitter',
            'keterangan' => 'Sosial Media',
            'status' => '1',
            'created_at' => '2023-02-11 00:07:45',
            'updated_at' => '2023-02-11 00:07:45',
        ]);
        DB::table('anggota_kontak_jenis')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Whatsapp',
            'icon' => 'fab fa-whatsapp',
            'keterangan' => 'Nomor Whatsapp Lain',
            'status' => '1',
            'created_at' => '2023-02-11 00:07:45',
            'updated_at' => '2023-02-11 00:07:45',
        ]);
        DB::table('anggota_kontak_jenis')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Youtube',
            'icon' => 'fab fa-youtube',
            'keterangan' => 'Youtube',
            'status' => '1',
            'created_at' => '2023-02-11 00:07:45',
            'updated_at' => '2023-02-11 00:07:45',
        ]);
        DB::table('anggota_kontak_jenis')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'Instagram',
            'icon' => 'fab fa-instagram',
            'keterangan' => 'Sosial Media',
            'status' => '1',
            'created_at' => '2023-02-11 00:07:45',
            'updated_at' => '2023-02-11 00:07:45',
        ]);
    }
}
