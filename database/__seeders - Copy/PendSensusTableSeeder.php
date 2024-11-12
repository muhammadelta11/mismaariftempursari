<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendSensusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'ahmad',
            'angkatan' => '2021',
            'email' => 'ahmad@gmail.com',
            'whatsapp' => '2323242545',
            'telepon' => '081225850639',
            'keterangan' => NULL,
            'status' => '2',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'coba',
            'angkatan' => '2021',
            'email' => 'azis@gmail.com',
            'whatsapp' => '2323242545',
            'telepon' => '081225850639',
            'keterangan' => 'Email sudah digunakan',
            'status' => '3',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'coba',
            'angkatan' => '2021',
            'email' => 'azis@gmail.com',
            'whatsapp' => '2323242545',
            'telepon' => '081225850639',
            'keterangan' => 'Email sudah digunakan',
            'status' => '3',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'coba',
            'angkatan' => '2021',
            'email' => 'azis@gmail.com',
            'whatsapp' => '2323242545',
            'telepon' => '081225850639',
            'keterangan' => 'Email sudah digunakan',
            'status' => '3',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'coba',
            'angkatan' => '2021',
            'email' => 'azis@gmail.com',
            'whatsapp' => '2323242545',
            'telepon' => '081225850639',
            'keterangan' => 'Email sudah digunakan',
            'status' => '3',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '6',
        ], [
            'nama' => 'muhammad mas\'udin',
            'angkatan' => '2021',
            'email' => 'smas998@gmail.com',
            'whatsapp' => '085532342547',
            'telepon' => '081225850639',
            'keterangan' => NULL,
            'status' => '0',
        ]);
        DB::table('pend_sensus')->updateOrInsert([
            'id' => '7',
        ], [
            'nama' => 'Keaktifan sangat bagus',
            'angkatan' => '2021',
            'email' => 'fansntki@gmail.com',
            'whatsapp' => '085232434343',
            'telepon' => '0852673889',
            'keterangan' => NULL,
            'status' => '0',
        ]);
    }
}
