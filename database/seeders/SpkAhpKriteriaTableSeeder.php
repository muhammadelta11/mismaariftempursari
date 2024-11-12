<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpkAhpKriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '10',
        ], [
            'nama' => 'Keaktifan Eksternal',
            'slug' => 'keaktifan-eksternal',
            'kode' => 'C2',
            'ci' => '0.050841632949475',
            'ri' => '0.9',
            'cr' => '0.056490703277195',
            'prioritas' => '0.15127539585744',
            'total' => '8.5',
            'eign_value' => '1.2858408647882',
            'created_at' => '2023-05-08 20:04:45',
            'updated_at' => '2024-05-12 23:09:00',
        ]);
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '11',
        ], [
            'nama' => 'Keaktifan Internal',
            'slug' => 'keaktifan-internal',
            'kode' => 'C1',
            'ci' => '0.0055916305916288',
            'ri' => '0.58',
            'cr' => '0.00964074239936',
            'prioritas' => '0.11657337044334',
            'total' => '9',
            'eign_value' => '1.0491603339901',
            'created_at' => '2023-05-08 20:05:18',
            'updated_at' => '2024-05-12 23:09:00',
        ]);
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '12',
        ], [
            'nama' => 'Pengalaman Organisasi',
            'slug' => 'pengalaman-organisasi',
            'kode' => 'C3',
            'ci' => '0.033780862157283',
            'ri' => '1.24',
            'cr' => '0.027242630772003',
            'prioritas' => '0.23641471474289',
            'total' => '4.75',
            'eign_value' => '1.1229698950287',
            'created_at' => '2023-05-08 20:06:22',
            'updated_at' => '2024-05-12 23:09:00',
        ]);
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '13',
        ], [
            'nama' => 'Kreatif',
            'slug' => 'kreatif',
            'kode' => 'C4',
            'ci' => '0.0055916305916288',
            'ri' => '0.58',
            'cr' => '0.00964074239936',
            'prioritas' => '0.17759118533112',
            'total' => '5.5',
            'eign_value' => '0.97675151932118',
            'created_at' => '2023-05-08 20:06:38',
            'updated_at' => '2024-05-12 23:09:00',
        ]);
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '14',
        ], [
            'nama' => 'Disiplin',
            'slug' => 'disiplin',
            'kode' => 'C5',
            'ci' => '0.0055916305916288',
            'ri' => '0.58',
            'cr' => '0.00964074239936',
            'prioritas' => '0.1590726668126',
            'total' => '6',
            'eign_value' => '0.95443600087563',
            'created_at' => '2023-05-08 20:06:50',
            'updated_at' => '2024-05-12 23:10:03',
        ]);
        DB::table('spk_ahp_kriteria')->updateOrInsert([
            'id' => '15',
        ], [
            'nama' => 'Perilaku',
            'slug' => 'perilaku',
            'kode' => 'C6',
            'ci' => '0',
            'ri' => '0',
            'cr' => '0',
            'prioritas' => '0.1590726668126',
            'total' => '6',
            'eign_value' => '0.95443600087563',
            'created_at' => '2024-05-12 23:09:00',
            'updated_at' => '2024-05-12 23:09:00',
        ]);
    }
}
