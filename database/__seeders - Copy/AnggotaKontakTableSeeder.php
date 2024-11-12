<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaKontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_kontaks')->updateOrInsert([
            'id' => '1',
        ], [
            'jenis_id' => '1',
            'anggota_id' => '1',
            'nilai' => 'https://facebook.com/muhammadmasud',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:08:46',
        ]);
        DB::table('anggota_kontaks')->updateOrInsert([
            'id' => '2',
        ], [
            'jenis_id' => '5',
            'anggota_id' => '1',
            'nilai' => 'https://www.instagram.com/masudeltamamy_9/',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:09:03',
        ]);
        DB::table('anggota_kontaks')->updateOrInsert([
            'id' => '141',
        ], [
            'jenis_id' => '5',
            'anggota_id' => '310',
            'nilai' => '@neit_am7',
            'created_at' => '2023-10-30 17:37:15',
            'updated_at' => '2023-10-30 17:37:15',
        ]);
        DB::table('anggota_kontaks')->updateOrInsert([
            'id' => '143',
        ], [
            'jenis_id' => '4',
            'anggota_id' => '314',
            'nilai' => 'https://youtube.com/@rizqullahhilmi?si=ZFwzC3_-RadgPl5-',
            'created_at' => '2023-10-31 12:19:12',
            'updated_at' => '2023-10-31 12:19:12',
        ]);
    }
}
