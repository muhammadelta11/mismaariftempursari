<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeri')->updateOrInsert([
            'id' => '10',
        ], [
            'nama' => 'Seminar Teknologi AI 2023',
            'foto' => '',
            'foto_id_gdrive' => '1S17R5KnormLObFyl6Wkzy4JR3AgHkj-M',
            'id_gdrive' => '1w1JmapaWVKFb5kNS4v7175xtv374x6ql',
            'slug' => 'seminar-teknologi-ai-2023',
            'tanggal' => '2023-10-28',
            'lokasi' => 'RUANG THEATER FAKULTAS KEDOKTERAN',
            'keterangan' => 'seminar 2023',
            'status' => '1',
            'created_at' => '2023-03-20 22:45:01',
            'updated_at' => '2023-11-02 21:23:17',
        ]);
        DB::table('galeri')->updateOrInsert([
            'id' => '15',
        ], [
            'nama' => 'BUKA BERSAMA HMJTI 22/23',
            'foto' => '',
            'foto_id_gdrive' => '1rO0OS9W4iNipWxNPwoiXdXUx_4_rZeAB',
            'id_gdrive' => '1qVFpIWq_S6ci1Znz0WJ9_y_0Ht2RYOxl',
            'slug' => 'buka-bersama-hmjti-2223',
            'tanggal' => '2023-04-06',
            'lokasi' => 'LESEHAN ALDAN',
            'keterangan' => 'DONE',
            'status' => '1',
            'created_at' => '2023-11-02 21:27:08',
            'updated_at' => '2023-11-02 21:27:08',
        ]);
    }
}
