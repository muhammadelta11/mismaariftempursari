<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PMenuFrontendsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('p_menu_frontends')->delete();
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '1',
                'parent_id' => NULL,
                'title' => "Home",
                'icon' => NULL,
                'route' => "__base_url__",
                'sequence' => '1',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:26:10",
                'updated_at' => "2024-05-18 07:18:57",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '2',
                'parent_id' => NULL,
                'title' => "Profile",
                'icon' => NULL,
                'route' => "tentang.sejarah",
                'sequence' => '2',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:30:39",
                'updated_at' => "2024-09-26 21:53:52",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '3',
                'parent_id' => '2',
                'title' => "Tentang Kami",
                'icon' => NULL,
                'route' => "tentang.sejarah",
                'sequence' => '3',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:30:59",
                'updated_at' => "2024-11-11 21:12:04",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '4',
                'parent_id' => '2',
                'title' => "Struktur Organisasi",
                'icon' => NULL,
                'route' => "tentang.kepengurusan.struktur",
                'sequence' => '5',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:31:18",
                'updated_at' => "2024-07-19 23:38:05",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '5',
                'parent_id' => '2',
                'title' => "Periode Tahunan",
                'icon' => NULL,
                'route' => "tentang.kepengurusan.periode",
                'sequence' => '4',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:31:35",
                'updated_at' => "2024-09-26 21:52:57",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '6',
                'parent_id' => '2',
                'title' => "Anggaran Dasar Anggaran Rumah Tangga",
                'icon' => NULL,
                'route' => "__file_shared__\/add_art_dan_ghbo_karmapack.pdf",
                'sequence' => '6',
                'active' => '1',
                'type' => '1',
                'created_at' => "2022-08-20 14:31:46",
                'updated_at' => "2024-07-19 23:38:24",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '7',
                'parent_id' => NULL,
                'title' => "Bidang",
                'icon' => NULL,
                'route' => "bidang",
                'sequence' => '7',
                'active' => '1',
                'type' => '1',
                'created_at' => "2022-08-20 14:32:07",
                'updated_at' => "2024-10-19 22:47:41",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '8',
                'parent_id' => '7',
                'title' => "Komunikasi dan Informasi",
                'icon' => NULL,
                'route' => "__base_url__\/tentang\/kepengurusan\/bidang\/2022-2023-komunikasi-dan-informasi",
                'sequence' => '8',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:34:52",
                'updated_at' => "2023-10-30 16:29:37",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '9',
                'parent_id' => '7',
                'title' => "Pengembangan Nalar dan Intelektual",
                'icon' => NULL,
                'route' => "__base_url__\/tentang\/kepengurusan\/bidang\/2022-2023-pengembangan-nalar-dan-intelektual",
                'sequence' => '9',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:34:52",
                'updated_at' => "2023-10-30 16:29:49",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '10',
                'parent_id' => '7',
                'title' => "Minat dan Bakat",
                'icon' => NULL,
                'route' => "__base_url__\/tentang\/kepengurusan\/bidang\/2022-2023-minat-dan-bakat",
                'sequence' => '10',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:34:52",
                'updated_at' => "2023-10-30 16:30:22",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '11',
                'parent_id' => NULL,
                'title' => "Pengembangan Aparatur Organisasi",
                'icon' => NULL,
                'route' => "__base_url__\/tentang\/kepengurusan\/bidang\/2022-2023-pengembangan-aparatur-organisasi",
                'sequence' => '12',
                'active' => '0',
                'type' => '0',
                'created_at' => "2022-08-20 14:34:52",
                'updated_at' => "2024-11-11 21:14:41",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '12',
                'parent_id' => '7',
                'title' => "Pengembangan Kode Etik dan Akhlakul Karimah",
                'icon' => NULL,
                'route' => "__base_url__\/tentang\/kepengurusan\/bidang\/2022-2023-pengembangan-kode-etik-dan-akhlakul-karimah",
                'sequence' => '11',
                'active' => '1',
                'type' => '1',
                'created_at' => "2022-08-20 14:34:52",
                'updated_at' => "2024-11-11 21:13:43",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '15',
                'parent_id' => NULL,
                'title' => "Guru",
                'icon' => NULL,
                'route' => "anggota",
                'sequence' => '13',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:46:42",
                'updated_at' => "2024-07-19 23:41:50",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '16',
                'parent_id' => '18',
                'title' => "Galeri",
                'icon' => NULL,
                'route' => "galeri",
                'sequence' => '19',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:46:53",
                'updated_at' => "2024-05-25 21:07:43",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '17',
                'parent_id' => '18',
                'title' => "Registrasi",
                'icon' => NULL,
                'route' => "pendaftaran\/registrasi",
                'sequence' => '18',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:47:03",
                'updated_at' => "2024-05-25 21:07:43",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '18',
                'parent_id' => '18',
                'title' => "More",
                'icon' => NULL,
                'route' => "#",
                'sequence' => '16',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-08-20 14:47:10",
                'updated_at' => "2024-05-25 21:10:16",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '19',
                'parent_id' => NULL,
                'title' => "Artikel",
                'icon' => NULL,
                'route' => "artikel",
                'sequence' => '15',
                'active' => '0',
                'type' => '1',
                'created_at' => "2022-09-02 01:03:02",
                'updated_at' => "2024-09-19 15:04:58",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '21',
                'parent_id' => NULL,
                'title' => "Galeri",
                'icon' => NULL,
                'route' => "galeri",
                'sequence' => '14',
                'active' => '0',
                'type' => '1',
                'created_at' => "2023-11-17 14:37:51",
                'updated_at' => "2024-09-19 15:04:58",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '22',
                'parent_id' => '18',
                'title' => "Kontak",
                'icon' => NULL,
                'route' => "kontak",
                'sequence' => '17',
                'active' => '0',
                'type' => '1',
                'created_at' => "2024-05-25 21:07:21",
                'updated_at' => "2024-05-25 21:07:43",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '23',
                'parent_id' => NULL,
                'title' => "Kontak",
                'icon' => NULL,
                'route' => "kontak",
                'sequence' => '16',
                'active' => '0',
                'type' => '1',
                'created_at' => "2024-05-25 21:12:19",
                'updated_at' => "2024-09-19 15:04:58",
        ]);
        DB::table('p_menu_frontends')->updateOrInsert([
                'id' => '24',
                'parent_id' => NULL,
                'title' => "Registrasi",
                'icon' => NULL,
                'route' => "pendaftaran.sensus",
                'sequence' => '17',
                'active' => '0',
                'type' => '1',
                'created_at' => "2024-05-25 21:15:47",
                'updated_at' => "2024-09-19 15:04:58",
        ]);
    }
}
