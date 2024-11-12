<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpkAhpKriteriaJenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'Kurang',
            'kode' => 'C1',
            'prioritas' => '0.16378066378066',
            'total' => '6',
            'eign_value' => '0.98268398268398',
            'kriteria_id' => '11',
            'created_at' => '2023-05-09 11:07:04',
            'updated_at' => '2023-05-09 11:42:02',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'Cukup',
            'kode' => 'C2',
            'prioritas' => '0.2972582972583',
            'total' => '3.5',
            'eign_value' => '1.040404040404',
            'kriteria_id' => '11',
            'created_at' => '2023-05-09 11:07:21',
            'updated_at' => '2023-05-09 11:42:02',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'Lengkap',
            'kode' => 'C3',
            'prioritas' => '0.53896103896104',
            'total' => '1.8333333333333',
            'eign_value' => '0.98809523809524',
            'kriteria_id' => '11',
            'created_at' => '2023-05-09 11:07:30',
            'updated_at' => '2023-05-09 11:42:02',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'Keaktifan sangat bagus',
            'kode' => 'C1',
            'prioritas' => '0.15540382819795',
            'total' => '7',
            'eign_value' => '1.0878267973856',
            'kriteria_id' => '10',
            'created_at' => '2023-05-09 11:09:37',
            'updated_at' => '2024-05-12 23:06:59',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'keaktifan bagus',
            'kode' => 'C2',
            'prioritas' => '0.23360177404295',
            'total' => '4.5',
            'eign_value' => '1.0512079831933',
            'kriteria_id' => '10',
            'created_at' => '2023-05-09 11:09:48',
            'updated_at' => '2024-05-12 23:06:59',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'aktif',
            'kode' => 'C3',
            'prioritas' => '0.36898926237162',
            'total' => '2.8333333333333',
            'eign_value' => '1.0454695767196',
            'kriteria_id' => '10',
            'created_at' => '2023-05-09 11:09:57',
            'updated_at' => '2024-05-12 23:06:59',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '9',
        ], [
            'nama' => 'Anggota Biasa',
            'kode' => 'C1',
            'prioritas' => '0.043443379739952',
            'total' => '21',
            'eign_value' => '0.91231097453899',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:43:28',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '10',
        ], [
            'nama' => 'Pernah jadi sekertaris bidang',
            'kode' => 'C2',
            'prioritas' => '0.065494217628283',
            'total' => '15.5',
            'eign_value' => '1.0151603732384',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:43:40',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '11',
        ], [
            'nama' => 'Pernah jadi ketua bidang',
            'kode' => 'C3',
            'prioritas' => '0.10244119275386',
            'total' => '10.833333333333',
            'eign_value' => '1.1097795881668',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:44:02',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '12',
        ], [
            'nama' => 'Pernah jadi bendahara umum',
            'kode' => 'C4',
            'prioritas' => '0.16043372867584',
            'total' => '7.0833333333333',
            'eign_value' => '1.1364055781205',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:44:25',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '13',
        ], [
            'nama' => 'Pernah jadi sekertaris umum',
            'kode' => 'C5',
            'prioritas' => '0.24883007333272',
            'total' => '4.2833333333333',
            'eign_value' => '1.0658221474418',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:44:36',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '14',
        ], [
            'nama' => 'Pernah jadi ketua umum',
            'kode' => 'C6',
            'prioritas' => '0.37935740786935',
            'total' => '2.45',
            'eign_value' => '0.9294256492799',
            'kriteria_id' => '12',
            'created_at' => '2023-05-09 11:44:55',
            'updated_at' => '2023-05-09 11:47:23',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '16',
        ], [
            'nama' => '2018',
            'kode' => 'C1',
            'prioritas' => '0.53896103896104',
            'total' => '1.8333333333333',
            'eign_value' => '0.98809523809524',
            'kriteria_id' => '13',
            'created_at' => '2023-05-09 11:48:11',
            'updated_at' => '2023-05-09 11:49:07',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '17',
        ], [
            'nama' => '2019',
            'kode' => 'C2',
            'prioritas' => '0.2972582972583',
            'total' => '3.5',
            'eign_value' => '1.040404040404',
            'kriteria_id' => '13',
            'created_at' => '2023-05-09 11:48:19',
            'updated_at' => '2023-05-09 11:49:07',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '18',
        ], [
            'nama' => '2020',
            'kode' => 'C3',
            'prioritas' => '0.16378066378066',
            'total' => '6',
            'eign_value' => '0.98268398268398',
            'kriteria_id' => '13',
            'created_at' => '2023-05-09 11:48:30',
            'updated_at' => '2023-05-09 11:49:07',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '19',
        ], [
            'nama' => 'Kurang',
            'kode' => 'C1',
            'prioritas' => '0.16378066378066',
            'total' => '6',
            'eign_value' => '0.98268398268398',
            'kriteria_id' => '14',
            'created_at' => '2023-05-09 11:49:48',
            'updated_at' => '2023-05-09 11:50:40',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '20',
        ], [
            'nama' => 'Baik',
            'kode' => 'C2',
            'prioritas' => '0.2972582972583',
            'total' => '3.5',
            'eign_value' => '1.040404040404',
            'kriteria_id' => '14',
            'created_at' => '2023-05-09 11:49:57',
            'updated_at' => '2023-05-09 11:50:40',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '21',
        ], [
            'nama' => 'Sangat Baik',
            'kode' => 'C3',
            'prioritas' => '0.53896103896104',
            'total' => '1.8333333333333',
            'eign_value' => '0.98809523809524',
            'kriteria_id' => '14',
            'created_at' => '2023-05-09 11:50:04',
            'updated_at' => '2023-05-09 11:50:40',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '22',
        ], [
            'nama' => 'Rumayan aktif',
            'kode' => 'C4',
            'prioritas' => '0.24200513538749',
            'total' => '4',
            'eign_value' => '0.96802054154995',
            'kriteria_id' => '10',
            'created_at' => '2024-05-12 23:06:59',
            'updated_at' => '2024-05-12 23:06:59',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '23',
        ], [
            'nama' => 'Bagus',
            'kode' => 'C6',
            'prioritas' => '0.5',
            'total' => '2',
            'eign_value' => '1',
            'kriteria_id' => '15',
            'created_at' => '2024-05-15 15:26:14',
            'updated_at' => '2024-05-15 15:26:49',
        ]);
        DB::table('spk_ahp_kriteria_jenis')->updateOrInsert([
            'id' => '24',
        ], [
            'nama' => 'kurang',
            'kode' => 'C7',
            'prioritas' => '0.5',
            'total' => '2',
            'eign_value' => '1',
            'kriteria_id' => '15',
            'created_at' => '2024-05-15 15:26:49',
            'updated_at' => '2024-05-15 15:26:49',
        ]);
    }
}
