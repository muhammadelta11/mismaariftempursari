<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaHobisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggota_hobis')->updateOrInsert([
            'id' => '25',
        ], [
            'nama' => 'Coding',
            'anggota_id' => '1',
            'created_at' => null,
            'updated_at' => null,
        ]);
        DB::table('anggota_hobis')->updateOrInsert([
            'id' => '26',
        ], [
            'nama' => 'Musik',
            'anggota_id' => '1',
            'created_at' => null,
            'updated_at' => null,
        ]);
        DB::table('anggota_hobis')->updateOrInsert([
            'id' => '27',
        ], [
            'nama' => 'Sepedaan',
            'anggota_id' => '1',
            'created_at' => null,
            'updated_at' => null,
        ]);
    }
}
