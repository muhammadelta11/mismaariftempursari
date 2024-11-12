<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaKontaksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_kontaks')->delete();
        
        \DB::table('anggota_kontaks')->insert(array (
        
        ));
        
        
    }
}