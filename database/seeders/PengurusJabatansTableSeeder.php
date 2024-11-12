<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusJabatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '129',
        ], [
            'no_urut' => '2',
            'nama' => 'Wakil Sekolah',
            'slug' => '2024-2025-wakil-sekolah',
            'foto' => 'iconrunner-up20240520212611.PNG',
            'singkatan' => 'wakasek',
            'visi' => '<p>Berani Unggul</p>
',
            'misi' => '<p>Teladan</p>
',
            'slogan' => 'berani unggul',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => null,
            'created_at' => '2023-11-14 13:43:50',
            'updated_at' => '2024-11-11 21:23:58',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '131',
        ], [
            'no_urut' => '3',
            'nama' => 'Sekertaris',
            'slug' => '2024-2025-sekertaris',
            'foto' => '',
            'singkatan' => '',
            'visi' => '<p>Sekertaris handal</p>
',
            'misi' => '',
            'slogan' => '',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => null,
            'created_at' => '2023-12-20 17:40:04',
            'updated_at' => '2024-11-11 21:24:45',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '133',
        ], [
            'no_urut' => '5',
            'nama' => 'Guru',
            'slug' => '2024-2025-guru',
            'foto' => '',
            'singkatan' => 'pengajar',
            'visi' => '',
            'misi' => '',
            'slogan' => 'Digugu',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => null,
            'created_at' => '2023-12-20 17:43:06',
            'updated_at' => '2024-11-11 21:25:26',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '135',
        ], [
            'no_urut' => '1',
            'nama' => 'Kepala Sekolah',
            'slug' => '2024-2025-kepala-sekolah',
            'foto' => '',
            'singkatan' => 'KAPSEK',
            'visi' => '<p>Mencerdaskan Kehidupan Bangsa</p>
',
            'misi' => '<p>Menciptakan lingkungan yang religius, smart dan kompetitif</p>
',
            'slogan' => 'berani unggul',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => null,
            'created_at' => '2023-12-20 17:44:51',
            'updated_at' => '2024-11-11 21:22:09',
        ]);
        DB::table('pengurus_jabatans')->updateOrInsert([
            'id' => '136',
        ], [
            'no_urut' => '7',
            'nama' => 'administrator',
            'slug' => '2024-2025-administrator',
            'foto' => '',
            'singkatan' => 'admin',
            'visi' => '',
            'misi' => '',
            'slogan' => 'smart',
            'status' => '1',
            'role_id' => '2',
            'periode_id' => '4',
            'parent_id' => null,
            'created_at' => '2024-11-11 21:26:14',
            'updated_at' => '2024-11-11 21:26:27',
        ]);
    }
}
