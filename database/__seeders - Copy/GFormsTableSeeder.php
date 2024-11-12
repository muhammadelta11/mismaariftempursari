<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GFormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g_forms')->updateOrInsert([
            'id' => '1',
        ], [
            'user_id' => '1',
            'nama' => 'PENGUMPULAN DATA PENGURUS HMJTI Unwahas PERIODE 2022-2023',
            'slug' => 'pengumpulan-data-pengurus-karmapack-periode-20222023',
            'deskripsi' => 'Sehubungan akan adanya pembuatan struktur organisasi. Kami dari divisi Mikat meminta teman-teman untuk mengisi format dibawah ini.',
            'no_urut' => '1',
            'dari' => '2023-08-31',
            'sampai' => '2023-11-30',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLSdau6VwXEPJ_fiKm1SZAZf4tZ7UCZFGpejVbmfbHevdQcmA5Q/viewform',
            'foto' => '20220808151008.png',
            'tampilkan' => '1',
            'status' => '1',
            'created_at' => '2022-08-08 13:55:32',
            'updated_at' => '2022-08-20 14:49:46',
        ]);
        DB::table('g_forms')->updateOrInsert([
            'id' => '5',
        ], [
            'user_id' => '1',
            'nama' => 'EVALUASI PENGISIAN DATA PENGURUS DI WEBSITE KARMAPACK PERIODE 2022-2023',
            'slug' => 'evaluasi-pengisian-data-pengurus-di-website-karmapack-periode-20222023',
            'deskripsi' => 'Setelah mengisi data pribadi pengurus untuk mengetahui seberapa baik fitur dan fungsi dari website ini.',
            'no_urut' => '1',
            'dari' => '2022-08-30',
            'sampai' => '2022-09-10',
            'link' => 'https://docs.google.com/forms/d/e/1FAIpQLScxdh0gW2IJL_3MbqTsMpPTsazFopTXZS2QmN_N0OAX-xjdaA/viewform',
            'foto' => '20220830111336.png',
            'tampilkan' => '0',
            'status' => '1',
            'created_at' => '2022-08-30 11:11:21',
            'updated_at' => '2022-08-30 11:13:36',
        ]);
    }
}
