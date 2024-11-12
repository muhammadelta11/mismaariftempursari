<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPendidikansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_pendidikans')->delete();
        
        \DB::table('anggota_pendidikans')->insert(array (
           
        ));
        
        
    }
}