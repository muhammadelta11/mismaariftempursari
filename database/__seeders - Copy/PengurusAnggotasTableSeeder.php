<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusAnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '252',
        ], [
            'jabatan_id' => '127',
            'anggota_id' => '1',
            'created_at' => '2023-11-02 21:03:22',
            'updated_at' => '2023-11-02 21:03:22',
        ]);
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '258',
        ], [
            'jabatan_id' => '135',
            'anggota_id' => '1',
            'created_at' => '2024-05-15 15:13:27',
            'updated_at' => '2024-05-15 15:13:27',
        ]);
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '260',
        ], [
            'jabatan_id' => '131',
            'anggota_id' => '307',
            'created_at' => '2024-05-15 15:14:40',
            'updated_at' => '2024-05-15 15:14:40',
        ]);
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '265',
        ], [
            'jabatan_id' => '129',
            'anggota_id' => '310',
            'created_at' => '2024-05-20 21:30:26',
            'updated_at' => '2024-05-20 21:30:26',
        ]);
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '266',
        ], [
            'jabatan_id' => '129',
            'anggota_id' => '351',
            'created_at' => '2024-05-20 21:30:26',
            'updated_at' => '2024-05-20 21:30:26',
        ]);
    }
}
