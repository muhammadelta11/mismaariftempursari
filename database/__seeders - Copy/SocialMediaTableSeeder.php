<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_media')->updateOrInsert([
            'id' => '1',
        ], [
            'nama' => 'facebook',
            'icon' => 'facebook',
            'url' => 'https://www.facebook.com/profile.php?id=918175911560880&_rdr',
            'order' => '4',
            'keterangan' => 'Facebook Utama',
            'status' => '1',
            'created_at' => '2022-04-18 06:56:15',
            'updated_at' => '2024-07-19 23:15:28',
        ]);
        DB::table('social_media')->updateOrInsert([
            'id' => '2',
        ], [
            'nama' => 'youtube',
            'icon' => 'youtube',
            'url' => 'https://www.youtube.com/@MariMedia-mima',
            'order' => '1',
            'keterangan' => 'Youtube Utama',
            'status' => '1',
            'created_at' => '2022-04-18 06:59:57',
            'updated_at' => '2024-07-19 23:12:30',
        ]);
        DB::table('social_media')->updateOrInsert([
            'id' => '3',
        ], [
            'nama' => 'whatsapp',
            'icon' => 'whatsapp',
            'url' => 'https://api.whatsapp.com/send?phone=+6285647121046&amp;text=Assalamualaikum wr wb halo admin web maarif tempursari.',
            'order' => '3',
            'keterangan' => 'Whatsapp Utama',
            'status' => '1',
            'created_at' => '2022-04-18 07:00:40',
            'updated_at' => '2024-07-19 23:14:13',
        ]);
        DB::table('social_media')->updateOrInsert([
            'id' => '4',
        ], [
            'nama' => 'instagram',
            'icon' => 'instagram',
            'url' => 'https://www.instagram.com/mimaariftempursari',
            'order' => '2',
            'keterangan' => 'Instagram Utama',
            'status' => '1',
            'created_at' => '2022-04-18 07:02:06',
            'updated_at' => '2024-07-19 23:13:13',
        ]);
        DB::table('social_media')->updateOrInsert([
            'id' => '5',
        ], [
            'nama' => 'website',
            'icon' => 'web',
            'url' => 'https://mismaariftempursari.sch.id',
            'order' => '5',
            'keterangan' => 'website',
            'status' => '1',
            'created_at' => '2024-05-16 12:20:19',
            'updated_at' => '2024-11-04 20:15:09',
        ]);
    }
}
