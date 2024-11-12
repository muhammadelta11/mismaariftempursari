<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPengalamanLainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_pengalaman_lains')->updateOrInsert([
            'id' => '15',
        ], [
            'pengalaman' => 'projek msib',
            'keterangan' => 'tugas akhir',
            'anggota_id' => '1',
            'created_at' => '2024-06-14 14:31:47',
            'updated_at' => '2024-06-14 14:31:47',
        ]);
    }
}
