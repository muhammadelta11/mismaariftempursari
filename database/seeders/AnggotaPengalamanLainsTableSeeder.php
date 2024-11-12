<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPengalamanLainsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_pengalaman_lains')->delete();
        
        \DB::table('anggota_pengalaman_lains')->insert(array (
            0 => 
            array (
                'id' => '1',
            'pengalaman' => 'Terlibat dalam pembuatan aplikasi Rencana Anggaran Biaya (RAB) Untuk Sekolah Indonesia Kota Kinabalu (SIKK) Malaysia pada tahun 2021',
                'keterangan' => NULL,
                'anggota_id' => '1',
                'created_at' => '2023-02-11 00:40:11',
                'updated_at' => '2023-02-11 00:40:11',
            ),
        ));
        
        
    }
}