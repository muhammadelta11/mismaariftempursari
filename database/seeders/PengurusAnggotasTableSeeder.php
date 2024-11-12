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
        // DB::table('pengurus_anggotas')->updateOrInsert([
        //     'id' => '252',
        // ], [
        //     'jabatan_id' => '127',
        //     'anggota_id' => '1',
        //     'created_at' => '2023-11-02 21:03:22',
        //     'updated_at' => '2023-11-02 21:03:22',
        // ]);
        DB::table('pengurus_anggotas')->updateOrInsert([
            'id' => '269',
        ], [
            'jabatan_id' => '135',
            'anggota_id' => '1',
            'created_at' => '2024-11-11 22:57:41',
            'updated_at' => '2024-11-11 22:57:41',
        ]);
    }
}
