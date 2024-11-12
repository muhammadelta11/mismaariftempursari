<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelKategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Kreatif',
            'slug' => 'kreatif',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2022-04-13 19:11:56',
            'updated_at' => '2024-05-16 10:43:08',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Keaktifan Eksternal',
            'slug' => 'keaktifan-eksternal',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2022-04-17 14:46:50',
            'updated_at' => '2024-05-16 10:43:46',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Blog Mahasiswa',
            'slug' => 'blog-mahasiswa',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2022-04-17 15:13:33',
            'updated_at' => '2024-05-16 10:42:55',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '7',
        ], [
            'nama' => 'Artikel',
            'slug' => 'artikel',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2022-09-06 13:06:02',
            'updated_at' => '2022-09-06 13:06:02',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '9',
        ], [
            'nama' => 'Market',
            'slug' => 'market',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2022-09-06 13:22:24',
            'updated_at' => '2024-05-16 11:49:46',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '12',
        ], [
            'nama' => 'Keahlian',
            'slug' => 'keahlian',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2023-09-12 11:03:20',
            'updated_at' => '2024-05-16 10:44:18',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '14',
        ], [
            'nama' => 'Sertifikasi',
            'slug' => 'sertifikasi',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2023-11-22 10:57:21',
            'updated_at' => '2024-05-16 10:43:24',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '15',
        ], [
            'nama' => 'Informasi',
            'slug' => 'informasi',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2024-02-27 20:29:11',
            'updated_at' => '2024-05-16 10:47:56',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '16',
        ], [
            'nama' => 'Tutorial',
            'slug' => 'tutorial',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2024-02-27 20:29:21',
            'updated_at' => '2024-02-27 20:29:21',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '17',
        ], [
            'nama' => 'Design',
            'slug' => 'design',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2024-05-16 10:48:59',
            'updated_at' => '2024-05-16 10:48:59',
        ]);
        DB::table('artikel_kategori')->updateOrInsert([
            'id' => '18',
        ], [
            'nama' => 'Pamer Projek',
            'slug' => 'pamer-projek',
            'foto' => NULL,
            'status' => '1',
            'created_at' => '2024-05-16 10:49:12',
            'updated_at' => '2024-05-16 10:49:12',
        ]);
    }
}
