<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'seminar',
            'slug' => 'seminar',
            'status' => '1',
            'created_at' => '2022-04-17 15:13:33',
            'updated_at' => '2023-10-30 12:59:14',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'Pribadi',
            'slug' => 'pribadi',
            'status' => '1',
            'created_at' => '2022-09-06 13:06:02',
            'updated_at' => '2024-05-16 12:19:09',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'Pelantikan',
            'slug' => 'pelantikan',
            'status' => '1',
            'created_at' => '2022-09-06 13:22:24',
            'updated_at' => '2022-09-06 13:22:24',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '7',
        ], [
            'nama' => 'Tag Baru',
            'slug' => 'tag-baru',
            'status' => '1',
            'created_at' => '2023-02-19 21:54:24',
            'updated_at' => '2023-02-19 21:54:24',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '8',
        ], [
            'nama' => 'Kabinet',
            'slug' => 'kabinet',
            'status' => '1',
            'created_at' => '2023-02-19 22:14:06',
            'updated_at' => '2024-05-16 12:18:38',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '9',
        ], [
            'nama' => 'Harlah',
            'slug' => 'harlah',
            'status' => '1',
            'created_at' => '2023-03-16 17:06:57',
            'updated_at' => '2023-03-16 17:06:57',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '10',
        ], [
            'nama' => 'Diskusi',
            'slug' => 'diskusi',
            'status' => '1',
            'created_at' => '2023-09-12 10:50:07',
            'updated_at' => '2023-09-12 10:50:07',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '11',
        ], [
            'nama' => 'Tentang',
            'slug' => 'tentang',
            'status' => '1',
            'created_at' => '2023-09-12 11:03:20',
            'updated_at' => '2023-09-12 11:03:20',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '12',
        ], [
            'nama' => 'himpunan',
            'slug' => 'himpunan',
            'status' => '1',
            'created_at' => '2023-09-12 11:03:20',
            'updated_at' => '2023-10-30 12:58:37',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '14',
        ], [
            'nama' => 'pelatihan',
            'slug' => 'pelatihan',
            'status' => '1',
            'created_at' => '2023-10-30 12:56:41',
            'updated_at' => '2023-10-30 12:56:41',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '15',
        ], [
            'nama' => 'HMJTI-UNWAHAS',
            'slug' => 'hmjti-unwahas',
            'status' => '1',
            'created_at' => '2023-11-05 15:46:39',
            'updated_at' => '2023-11-05 15:46:39',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '16',
        ], [
            'nama' => 'SUMAJUTI',
            'slug' => 'sumajuti',
            'status' => '1',
            'created_at' => '2023-11-05 15:46:39',
            'updated_at' => '2023-11-05 15:46:39',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '17',
        ], [
            'nama' => 'Informatika',
            'slug' => 'informatika',
            'status' => '1',
            'created_at' => '2023-11-05 15:46:39',
            'updated_at' => '2023-11-05 15:46:39',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '18',
        ], [
            'nama' => 'Unwahas',
            'slug' => 'unwahas',
            'status' => '1',
            'created_at' => '2023-11-05 15:46:39',
            'updated_at' => '2023-11-05 15:46:39',
        ]);
        DB::table('artikel_tag')->updateOrInsert([
            'id' => '19',
        ], [
            'nama' => 'Blog Mahasiswa',
            'slug' => 'blog-mahasiswa',
            'status' => '1',
            'created_at' => '2024-05-16 12:14:16',
            'updated_at' => '2024-05-16 12:18:18',
        ]);
    }
}
