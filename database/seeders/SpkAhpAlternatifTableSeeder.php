<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpkAhpAlternatifTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spk_ahp_alternatif')->updateOrInsert([
            'id' => '16',
        ], [
            'anggota_id' => '1',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
    }
}
