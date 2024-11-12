<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaPengalamanOrganisasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_pengalaman_organisasis')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'HMJ TI',
            'dari' => '2022',
            'sampai' => '',
            'jabatan' => 'Devisi Minat Dan Bakat',
            'keterangan' => NULL,
            'anggota_id' => '1',
            'created_at' => '2023-02-11 00:40:11',
            'updated_at' => '2023-10-21 16:16:22',
        ]);
    }
}
