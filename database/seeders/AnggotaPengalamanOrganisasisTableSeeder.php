<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaPengalamanOrganisasisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('anggota_pengalaman_organisasis')->delete();
        
        \DB::table('anggota_pengalaman_organisasis')->insert(array (
           
        ));
        
        
    }
}