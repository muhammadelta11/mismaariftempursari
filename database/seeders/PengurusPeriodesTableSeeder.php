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
                'nama' => "Digitalisasi",
                'foto' => "icondigitalisa20241111205534.png",
                'dari' => '2024',
                'sampai' => '2025',
                'slug' => "digitalisasi",
                'slogan' => "mewujudkan generasi robbani, berprestasi dan berwawasan lingkungan",
                'visi' => "<div>\r\n<div>Madrasah Kami memiliki visi untuk mewujudkan generasi robbani, berprestasi dan berwawasan lingkungan. Melalui visi terebut, segenap elemen madrasah berusaha sekuat tenaga untuk ambil bagian dalam membangun generasi bangsa saat ini supaya memiliki keterampilan abad 21 (citical thingking, creative, inovative, and communicative) dengan fondasi keimanan dan ketaqwaan kepada Allah SWT.<\/div>\r\n<\/div>\n",
                'misi' => "<ol>\r\n<li>Dengan penuh kesadaran bahwa sepuluh hingga dua puluh tahun ke depan, para pemimpin bangsa ditentukan dari generasi saat ini, maka MIS MA'arif Teempursari diharapkan selalu melahirkan generasi berkarakter Islami yang kuat, berwawasan luas, terampil dan memiliki kepedulian yang tinggi terhadap kelestarian lingkungan..<\/li>\r\n<\/ol>\n",
                'filosofi_logo' => "<ul>\r\n<li>\r\n<p><strong>Bentuk Lingkaran<\/strong>: Seringkali digunakan untuk melambangkan kesempurnaan dan kesinambungan dalam pendidikan. Lingkaran juga dapat menunjukkan bahwa pendidikan tidak pernah berhenti dan terus berkembang.<\/p>\r\n<\/li>\r\n<li>\r\n<p><strong>Buku atau Al-Qur&rsquo;an<\/strong>: Buku sering kali menjadi simbol utama, mengingat madrasah adalah lembaga pendidikan yang mengajarkan berbagai ilmu pengetahuan, terutama ilmu agama. Dalam konteks Madrasah Ibtidaiyah, buku atau Al-Qur'an melambangkan sumber utama ilmu pengetahuan yang diajarkan.<\/p>\r\n<\/li>\r\n<li>\r\n<p><strong>Tulisan Arab<\/strong>: Beberapa logo MI mencantumkan tulisan Arab, yang bisa berupa kalimat seperti \"Bismillah\" atau \"Madrasah Ibtidaiyah\", sebagai pengingat akan dasar ajaran Islam yang menjadi pedoman di dalam pendidikan tersebut.<\/p>\r\n<\/li>\r\n<li>\r\n<p><strong>Warna Hijau<\/strong>: Warna hijau sering digunakan dalam logo madrasah, karena dalam budaya Islam, hijau melambangkan kesuburan, kedamaian, dan kesejahteraan, serta identitas yang berhubungan dengan Nabi Muhammad SAW.<\/p>\r\n<\/li>\r\n<li>\r\n<p><strong>Pita atau Anyaman<\/strong>: Kadang-kadang logo MI juga dilengkapi dengan elemen dekoratif seperti pita atau pola anyaman, yang menunjukkan keindahan dan seni dalam pendidikan Islam.<\/p>\r\n<\/li>\r\n<\/ul>\n",
                'status' => '1',
                'created_at' => "2023-11-14 13:40:53",
                'updated_at' => "2024-11-11 20:55:34",
            ),
        ));
    }
}
