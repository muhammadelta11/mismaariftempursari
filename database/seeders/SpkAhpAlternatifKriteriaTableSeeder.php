<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpkAhpAlternatifKriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '106',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '10',
            'kriteria_jenis_id' => '4',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '107',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '11',
            'kriteria_jenis_id' => '2',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '108',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '12',
            'kriteria_jenis_id' => '11',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '109',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '13',
            'kriteria_jenis_id' => '18',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '110',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '14',
            'kriteria_jenis_id' => '21',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
        DB::table('spk_ahp_alternatif_kriteria')->updateOrInsert([
            'id' => '111',
        ], [
            'alternatif_id' => '16',
            'kriteria_id' => '15',
            'kriteria_jenis_id' => '23',
            'created_at' => '2024-05-15 15:29:32',
            'updated_at' => '2024-05-15 15:29:32',
        ]);
    }
}
