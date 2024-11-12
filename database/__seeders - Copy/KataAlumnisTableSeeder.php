<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KataAlumnisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kata_alumnis')->updateOrInsert([
            'id' => '1',
        ], [
            'user_id' => '1',
            'sebagai' => 'Kominfo 2021-2023',
            'deskripsi' => 'Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di Dicoding belajarnya step by step, library-nya up-to-date. Kalau ada eror, nggak bingung. Di sini saya juga belajar untuk nggak asal coding. CV pun jadi bagus. Saya jadi percaya diri.',
            'sequence' => '1',
            'profesi' => 'Junior Programmer Di Shopee',
            'status' => '1',
            'created_at' => '2022-08-09 15:11:08',
            'updated_at' => '2023-10-21 21:28:15',
        ]);
    }
}
