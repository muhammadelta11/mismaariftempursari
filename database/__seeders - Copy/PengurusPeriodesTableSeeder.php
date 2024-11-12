<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengurusPeriodesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengurus_periodes')->delete();
        DB::table('pengurus_periodes')->insert(array (
            array (
                'id' => '4',
                'nama' => "Periode 2024",
                'foto' => "iconperiode-2020240513093221.png",
                'dari' => '2024',
                'sampai' => '2025',
                'slug' => "periode-2024",
                'slogan' => "Go To Up Level",
                'visi' => "<div>\r\n<div>Madrasah Kami memiliki visi untuk mewujudkan generasi robbani, berprestasi dan berwawasan lingkungan. Melalui visi terebut, segenap elemen madrasah berusaha sekuat tenaga untuk ambil bagian dalam membangun generasi bangsa saat ini supaya memiliki keterampilan abad 21 (citical thingking, creative, inovative, and communicative) dengan fondasi keimanan dan ketaqwaan kepada Allah SWT.<\/div>\r\n<\/div>\n",
                'misi' => "<ol>\r\n<li>Dengan penuh kesadaran bahwa sepuluh hingga dua puluh tahun ke depan, para pemimpin bangsa ditentukan dari generasi saat ini, maka MA ULUMUL QUR'AN KOTA SERANG diharapkan selalu melahirkan generasi berkarakter Islami yang kuat, berwawasan luas, terampil dan memiliki kepedulian yang tinggi terhadap kelestarian lingkungan..<\/li>\r\n<\/ol>\n",
                'filosofi_logo' => "<p>Lingkaran Dunia Teknologi<\/p>\n",
                'status' => '1',
                'created_at' => "2023-11-14 13:40:53",
                'updated_at' => "2024-07-21 19:40:11",
            ),
        ));
    }
}
